<?php
/* ------------ Sessions ------------ */
session_start();

/*
    Sessions are a way to store information (in variables) to be used across multiple pages.
    Unlike cookies, sessions are stored on the server.
  */

if (isset($_POST["submit"])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if ($username == 'jom' && $password == '123') {
    // * $_SESSION['var_name'] = var 
    // * - sets the session variable at the server

    $_SESSION['username'] = $username;

    // * header('Location: <url>') - redirects user to url

    header('Location: /php_demo/_starter_files/extras/dashboard.php');
  } else {
    echo 'Incorrect credentials';
  }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
  <div>
    <label for="username">Enter username</label>
    <input type="text" name="username" />
  </div>
  <div>
    <label for="password">Enter password</label>
    <input type="password" name="password" />
  </div>
  <button type="submit" name="submit">Submit</button>
</form>