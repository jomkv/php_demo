<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

  // * $ - for declaring and referencing variables
  $name = 'Jomarculus'; // string
  $age = 19; // int
  $has_kids = false; // bool
  $money_on_wallet = 24.10; // float

  // var_dump($has_kids);

  // * Use double quotes for string placeholders
  // echo "$name is $age years old and has $money_on_wallet pesos ";

  $sum = 5 + 5;
  // var_dump($sum);
  // echo 10 + 1;
  // echo 10 - 1;
  // echo 10 / 2;
  // echo 9 % 3;

  // * define('name', 'value') - for declaring const / constants
  // * common convention is for the name to be all caps
  define('NAME', "jomarculus");
  echo NAME; 