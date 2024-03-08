<?php
  /* ------------- Cookies ------------ */

  /*
    Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
  */
  
  // * setcookie(var name, var value, expiration option)
  setcookie("name", "jom", time() + 86400 * 30);
  setcookie("age", 19, time() + 86400 * 30);

  if(isset($_COOKIE["name"]) && isset($_COOKIE["age"])) {
    $name = htmlspecialchars($_COOKIE["name"]);
    $age = htmlspecialchars($_COOKIE["age"]);

    echo $name;
    echo $age;
  }

  // * to unset a cookie
  // * either set their value to empty / null
  // * or set the expiration to the past
  setcookie("name", null, time() + 86400 * 30);