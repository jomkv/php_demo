<?php
  /* ------------ Functions ----------- */

  /*
    Functions are reusable blocks of code that we can call to perform a specific task.
    We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


  /*
  ** Function Syntax
    function functionName($arg1, $arg2, ...) {
      // code to be executed
    }
  */

  // function createUser($username, $email) {
  //   echo 'New user! <br>';
  //   echo 'Username: ' . $username . '<br>';
  //   echo 'Email: ' . $email . '<br>';
  // }

  // createUser('jomarculus', 'jomarculus@hehe.com');

  // * Functions with default values

  function getSum($n1 = 1, $n2 = 1) {
    return $n1 + $n2;
  }

  // $res = getSum(2, 2);
  // echo $res;

  // * Anonymous functions

  $subtract = function($n1, $n2) {
    return $n1 - $n2;
  };

  // echo $subtract(10, 5);

  // * Shorthand return

  $multiply = fn($n1, $n2) => $n1 * $n2;

  // echo $multiply(3, 3);

  // * Accessing global variables within local scopes
  $test_var = 'hihi';

  function test_function() {
    GLOBAL $test_var;
    echo $test_var;
  }

  // test_function();

  // * !! Challenge activity !!
  // * Create a PHP script that calculates and displays the grades of students
  // * based on their scores. The script should use conditionals, arrays, and loops.

  // A: 90-100
  // B: 80-89
  // C: 70-79
  // D: 60-69
  // F: 0-59

  function determineGrade($gradeNum) {
    if($gradeNum >= 90) {
      return 'A';
    }
    else if($gradeNum >= 80) {
      return 'B';
    }
    else if($gradeNum >= 70) {
      return 'C';
    }
    else if($gradeNum >= 60) {
      return 'D';
    }
    else {
      return 'F';
    }
  }

  $studentGrades = [
    'John' => 79, //  C
    'Bro' => 86, // B
    'Jom' => 69, // D 
    'Einstein' => 100, // A
    'Bob' => 55 // F
  ];

  $highest = key($studentGrades);
  $lowest = key($studentGrades);
  $classAvg = 0;

  foreach($studentGrades as $studentName => $studentGrade) {

    // get class avg 
    $classAvg += $studentGrade;

    // get class lowest and highest
    if ($studentGrade > $studentGrades[$highest]) {$highest = $studentName;}
    if ($studentGrade < $studentGrades[$lowest]) {$lowest = $studentName;}

    // print student's grade
    $grade = determineGrade($studentGrade);
    echo $studentName . ' - ' . $grade . '<br>';
  }

  $classAvg /= count($studentGrades);

  echo 'Class Average Grade: ' . $classAvg . '<br>';
  echo 'Best Student: ' . $highest . '<br>';
  echo 'Worst Student: ' . $lowest . '<br>';

  


