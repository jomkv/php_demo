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
