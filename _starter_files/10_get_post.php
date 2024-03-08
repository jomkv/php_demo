<?php
  /* --- $_GET & $_POST Superglobals -- */

  /*
    We can pass data through urls and forms using the $_GET and $_POST superglobals.
  */

  if(isset($_POST['submit'])) {
    echo $_POST["name"];
    echo $_POST["age"];
  }
?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
  <div>
    <label for="name">Enter name</label>
    <input type="text" name="name" />
  </div>
  <div>
    <label for="age">Enter Age</label>
    <input type="text" name="age" />
  </div>
  <button type="submit" name="submit">Submit</button>
</form>