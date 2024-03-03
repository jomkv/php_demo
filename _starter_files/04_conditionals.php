<?php
  /* ---- Conditionals & Operators ---- */

  /* ------------ Operators ----------- */

  /*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to
  */

  /* ---------- If & If-Else Statements --------- */

  /*
  ** If Statement Syntax
  if (condition) {
    // code to be executed if condition is true
  }
  */

  /* -------- Ternary Operator -------- */
  /*
    The ternary operator is a shorthand if statement.
    Ternary Syntax:
      condition ? true : false;
  */


  $t = 17;

  // if($t < 12) {
  //   echo 'good morning';
  // }
  // else if ($t <= 16) {
  //   echo 'good afternoon';
  // }
  // else {
  //   echo 'good night';
  // }

  $students = [];

  // if(!empty($students)) {
  //   echo $students[0];
  // }
  // else {
  //   echo 'No students';
  // }

  // * Ternary
  // $firstStudent = !empty($students) ? $students[0] : 'No students';

  // * Shortcut
  // $firstStudent = $students[0] ?? null;

  /* -------- Switch Statements ------- */

  $fav_color = 'red';

  switch($fav_color) {
    case 'black':
      echo 'ME TOO';
      break;
    default:
      echo 'bruh';
      break;
  }
