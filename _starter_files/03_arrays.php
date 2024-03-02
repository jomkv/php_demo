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
  var_dump(json_encode($people[0]));
