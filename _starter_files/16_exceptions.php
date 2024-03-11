<?php

/* ----------- Exceptions ----------- */

/*
    PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
  */

function inverse($num)
{
  if (!$num) {
    throw new Exception('Division by zero!');
  }

  return 1 / $num;
}

try {
  echo inverse(10) . "<br>";
} catch (Exception $err) {
  echo "Error occured: " . $err->getMessage() . "<br>";
} catch (TypeError $err) {
  echo "Error occured, must input valid number" . "<br>";;
} finally {
  echo "The end" . "<br>";
}
