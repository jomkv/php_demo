<?php
  /* --------- Array Functions -------- */

  /*
    Functions to work with arrays
    https://www.php.net/manual/en/ref.array.php
  */

  $fruits = ['apple', 'banana', 'orange'];

  // * count(arr) - returns length 
  // echo count($fruits) . '<br>';

  // * in_array(thing, arr) - checks if thing is in array, returns bool
  // var_dump(in_array('apples', $fruits));

  // * adding items to array
  
  // $fruits[] = 'grape'; // Option 1
  // array_push($fruits, 'graPES'); // Option 2
  // array_unshift($fruits, 'hehehe'); // Option 3 (inserts at beginning of arr)

  // * remove from array

  // array_pop($fruits); // * deletes last item of arr
  // array_shift($fruits); // * deletes first item of arr
  // unset($fruits[2]); // * deletes item at index

  // * split to chunks
  
  // $chunked_array = array_chunk($fruits, 1); // * split items to be individual
  // $chunked_array = array_chunk($fruits, 2); // * split items to be by pair

  // * Combine / Concatinate arrays

  $arr1 = [1, 2, 3];
  $arr2 = [4, 5, 6];

  $merged_arr = array_merge($arr1, $arr2); // * merge
  $spread_arr = [...$arr1, ...$arr2]; // * spread
  
  // print_r($spread_arr);

  $a = ['green', 'red', 'yellow'];
  $b = ['avocado', 'apple', 'banana'];

  $c = array_combine($a, $b); // * combine 2 arrs into pairs
                              // * first arr (a) will be the keys
                              // * second arr (b) will be the values

  $keys = array_keys($c); // * get keys of an associative arr

  // print_r($c);

  $flipped_arr = array_flip($c); // * flip the array's keys and values

  // print_r($flipped_arr);

  // * range(starting_num, end_num) - creates a range of numbers 
  // * from starting point to end point
  $numbers = range(1, 20); 

  // foreach((range(1, 10)) as $number)  // * cool usage of range :D 
  // {
  //   echo $number . '<br>';
  // }

  // * array_map(fn($curr), arr) - iterates through arr, per iteration
  // * it will use the function given
  $numbers_x2 = array_map(fn($num) => $num*2, $numbers);

  // * array_filter(arr, fn($curr) => filter condition here) - iterates through
  // * arr, if condition is met then it will return the curr iteration to the array 
  $even_numbers = array_filter($numbers, fn($num) => $num % 2 === 0);

  // print_r($even_numbers);

  $nums = range(1, 20);

  // print_r($nums);

  $evens = array_filter($nums, fn($n) => $n%2 !== 0);

  // print_r($evens);
  
  // * array_reduce(arr, fn(previous result, curr) => action)
  // * - per iteration it will perform an action and it will return the result
  $sum = array_reduce($numbers, fn($carry, $number) => $number+$carry);

  // var_dump($sum);