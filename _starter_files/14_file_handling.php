<?php

/* ---------- File Handling --------- */

/* 
    File handling is the ability to read and write files on the server.
    PHP has built in functions for reading and writing files.
  */

$file = 'extras/users.txt';

// * file_exists(file) - checks if file is properly loaded 
if (file_exists($file)) {

  // * readfile(file) - outputs the contents of the file
  // echo readfile($file);

  // * fopen(file, mode) - returns a pointer to the file being opened
  // * - can do different actions depending on the mode
  $handle = fopen($file, 'r');

  // * fread(pointer to file, length / file size) - outputs the content
  // * - of the file into the variable being set to
  $contents = fread($handle, filesize($file));

  // * fclose(pointer) - self explanatory, good practice after opening a file
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');

  // * PHP_EOL - line break for text files
  $contents = 'Jom' . PHP_EOL . 'Jomarculus';

  // * fwrite(pointer, content) - writes the content into the pointer's file
  fwrite($handle, $contents);

  fclose($handle);
}
