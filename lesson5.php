<?php

interface Payment
{

    function processPayment();

    function getPaymentHistory();
}

class PayPal implements Payment
{

    public function processPayment()
    {

    }

    public function getPaymentHistory()
    {

    }

}

class GlobalPayment implements Payment
{

    public function getPaymentHistory()
    {

    }

    public function processPayment()
    {

    }

}

class Stripe implements Payment
{

    public function getPaymentHistory()
    {

    }

    public function processPayment()
    {

    }

}

//actual payment is processed
$payment_gateway = getPaymentClass();
$payment_gateway->processPayment();

function getPaymentClass()
{
    $payment_gateway = NULL;
    switch ($select_payment_gateway) {
        case 'paypal':
            $payment_gateway = new PayPal();
            break;
        case 'globalpayment':
            $payment_gateway = new GlobalPayment();
        case 'stripe';
            $payment_gateway = new Stripe();
    }
    return $payment_gateway;
}
