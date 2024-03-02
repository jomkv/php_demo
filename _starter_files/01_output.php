<?php
/* -------- Output & Comments ------- */

  // echo - can output almost anything, even html. but not arrays
  // - can also accept multiple arguments
  // echo 12, 'test', 24.4; => Works
  // echo [1, 2, 3]; => Error

  // = - shorthand for echo, but must enable at settings / config
  // = "test";

  // print - works like echo but only one value at a time
  // print "test"; => Works
  // print [1, 2, 3]; => Error


  // print_r() - for printing single values and arrays
  // print_r([1,2,3]);

  // var_dump() - prints the values along with it's type and length (if possible)
  // var_dump(false);

  // var_export() - prints / returns a string representation of passed in value
  // var_export("hello", false);

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/