<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class Student
{
  // * attributes / properties
  public $name;
  public $course;

  // * constructor
  public function __construct($name, $course)
  {
    $this->name = $name;
    $this->course = $course;
  }

  // * methods
  function showStudent()
  {
    echo "Name: " . $this->name . "<br>";
    echo "Course: " . $this->course . "<br>";
  }
}

class Alumni extends Student
{
  public $year_graduated;

  public function __construct($name, $course, $year_graduated)
  {
    parent::__construct($name, $course);
    $this->year_graduated = $year_graduated;
  }

  function showAlumni()
  {
    parent::showStudent();
    echo "Year Graduated: " . $this->year_graduated . "<br>";
  }
}

// * to access an object's attribute/method use the following syntax:
// * object->property/method

// $me = new Student("Jom", "Computer Science");
// $me->showStudent();
// $me->name = "Jomarculus";
// $me->course = "IT";
// $me->showStudent();

$future_me = new Alumni("Jom", "Computer Science", 2026);
$future_me->showAlumni();
