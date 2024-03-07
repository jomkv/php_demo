<?php
  /* ---------- String Functions -------- */

  /*
    Functions to work with strings
    https://www.php.net/manual/en/ref.strings.php
  */

  $string = "Hello World";

  // * strlen(string) - gives length of string

  // * strpos(string, char) - gives index of first occurence of char

  // * strrev(string) - reverse a string

  // * strtolower(string) - lowercase all chars

  // * strtoupper(string) - uppercall all chars

  // * ucwords(string) - capitalize first letter per word
  
  // * str_replace(word/char to replace, replacement, string) - replaces word / char that matches
  
  // * substr(string, start, end) - return portion of string specified by start and end
  // * substr(string, end) - return portion of string from start to specified end

  // * str_starts_with(string, word/char) - returns bool 
  // if(str_starts_with($string, "Hello")) {
  //   echo "yes";
  // }

  // * str_ends_with(string, word/char) - returns bool
  // if(str_ends_with($string, "World")) {
  //   echo " yes";
  // }

  $string2 = "<h1>hehe</h1>";

  // *htmlspecialchars(string) - makes sure the html tags from string do not get rendered
  // echo htmlspecialchars($string2);


  // * printf(string with placeholders)
  // * %s for string, %d for whole nums, %f for float
  // printf('%s likes to %s', 'John', 'run');

  // printf("1+1 is equals to %d", 1+1);