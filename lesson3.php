<?php

class Student
{

    private $name;
    private $subjects = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addSubject(Subject $subject)
    {
        $this->subjects[] = $subject;
    }

    public function getTimeTable()
    {
        echo $this->name . "'s time table -----</br>";
        foreach ($this->subjects as $sub) {
            echo $sub->getClassTime();
        }
    }

}

class Subject
{

    private $name;
    private $lecture_day;
    private $lecture_time;

    public function __construct($name, $lecture_day, $lecture_time)
    {
        $this->name = $name;
        $this->lecture_day = $lecture_day;
        $this->lecture_time = $lecture_time;
    }

    public function getClassTime()
    {
        echo $this->name . 'is on' . $this->lecture_day . 'at' . $this->lecture_time . '</br>';
    }

}

$maths = new Subject('Maths', 'Friday', '8 AM');
$english = new Subject('English', 'Tuesday', '10 AM');
$music = new Subject('Music', 'Monday', '12 AM');

$sam = new Student('Sam');
$sam->addSubject($music);
$sam->addSubject($english);
$sam->getTimeTable();

$anne = new Student('Anne');
$anne->addSubject($music);
$anne->addSubject($maths);
$anne->getTimeTable();
