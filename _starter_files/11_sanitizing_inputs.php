<?php
  /* --- Sanitizing Inputs -- */

  /*
    Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
  */


  // * isset(var) - returns bool if var is null or not
  if(isset($_POST["submit"])) {
    echo htmlspecialchars($_POST["name"]);
    echo htmlspecialchars($_POST["age"]);
  }

  // * more direct way
  // if($_POST["name"] && $_POST["name"]) {
  //   echo $_POST["name"];
  //   echo $_POST["age"];
  // }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
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
