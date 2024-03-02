<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

  // * Simple array
  $numbers = [1, 2, 3, 4];
  $fruits = array('test1', 'test2', 'test3', 1, 2, 3);

  define('TEST_ARR', array("test", 1, 2, 3));

  // var_dump($fruits[3]);

  $colors = [
    1 => 'red',
    "blue" => 3
  ];

  // var_dump($colors[1]);
  // var_dump($colors['blue']);

  // * Associative array - define your own indices
  $person = [
    'first_name' => 'jom karlo',
    'last_name' => 'verzosa',
    'email' => 'jomkarlov@gmail.com',
  ];

  // echo $person['first_name'];

  // define('TEST_VAR', 'first_name');
  // echo $person[TEST_VAR]; => works

  // * 2D arrays
  
  $people = [
    [
      'first_name' => 'jom karlo',
      'last_name' => 'verzosa',
      'email' => 'jomkarlov@gmail.com'
    ],
    [
      'first_name' => 'john',
      'last_name' => 'doe',
      'email' => 'johndoe@gmail.com'
    ],
  ];

  // echo $people[0]['first_name']; => jom karlo 
  // echo $people[1]['first_name']; => john

  // * Convert array to json

  //var_dump(json_encode($people[0]));

  // * Challenge: Demonstrate how to modify the arrays dynamically by adding, updating, 
  // * or removing elements and output the arrays after each modification
  $students = [
    [
      'name' => 'jom',
      'grade' => 1.75,
      'isFailing' => false,
    ],
    [
      'name' => 'john',
      'grade' => 1.00,
      'isFailing' => false,
    ],
    [
      'name' => 'billy',
      'grade' => 4.00,
      'isFailing' => true,
    ],
  ];

  // echo $students[0]['name'], "'s grade before: ", $students[0]['grade'], "\n"; => 1.75 
  // $students[0]['grade'] = 4.00;
  // $students[0]['isFailing'] = true;
  // echo $students[0]['name'], "'s grade after: ", $students[0]['grade']; => 4.00

  // echo $students[2]['name'], "'s grade before: ", $students[2]['grade'], "\n"; => 4.00
  // $students[2]['grade'] = 1.00;
  // $students[2]['isFailing'] = false;
  // echo $students[2]['name'], "'s grade after: ", $students[2]['grade']; => 1.00
  
