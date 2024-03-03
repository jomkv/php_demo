<?php

  /* -------- Loops & Iteration ------- */

  /* ------------ For Loop ------------ */

  /* 
  ** For Loop Syntax
    for (initialize; condition; increment) {
    // code to be executed 
    }
  */

  // for($i = 2; $i <= 10; $i += 2) {
  //   echo $i . '<br>';
  // }

  /* ------------ While Loop ------------ */

  /*
  ** While Loop Syntax
    while (condition) {
    // code to be executed
    }
  */

  // $count = 1;
  // while($count <= 5) {

  //   if($count === 3) {
  //     $count++;
  //     continue;
  //   }

  //   echo $count . '<br>';

  //   $count++;
    
  // }


  /* ---------- Do While Loop --------- */

  /*
  ** Do While Loop Syntax
    do {
    // code to be executed
    } while (condition);

  do...while loop will always execute the block of code once, even if the condition is false.
  */

  // $i = 1;

  // do {
  //   echo 'Number ' . $i . '<br>';
  //   $i++;
  // } while($i < 0);
  
  /* ---------- Foreach Loop ---------- */

  /*
  ** Foreach Loop Syntax
    foreach ($array as $value) {
    // code to be executed
    }
  */

  $posts = ['Post 1', 'Post 2', 'Post 3', 'FINAL POST'];

  // for($i = 0; $i < count($posts); $i++) {
  //   echo $posts[$i] . '<br>';
  // }

  // foreach($posts as $post) {
  //   echo $post . '<br>';
  // }

  // foreach($posts as $index => $post) {
  //   echo $index . ' - ' . $post . '<br>'; 
  // }

  // $students = [
  //   'FiRST INDEX' => 'hello i am student 1',
  //   'SECAND INDEFX' => 'hello i am the 2nd student',
  //   'LAST STUDENT' => 'last but not the least student' 
  // ];

  // foreach($students as $key => $student) {
  //   echo $key . ' - ' . $student . '<br>';
  // }
