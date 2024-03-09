<?php
/* ----------- File upload ---------- */

if (isset($_POST["submit"])) {
  $allowed_ext = ['png', 'jpg', 'jpeg', 'gif'];

  // * $_FILES[filename] - indexes the file itself
  if (!empty($_FILES['upload'])) {
    // * $_FILES[filename][property(IE: name)] - indexes the file's name, or other file properties
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = "uploads/" . $file_name;

    // Get file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    // Check if file extension is valid
    $is_valid = in_array($file_ext, $allowed_ext);

    if ($is_valid) {
      // if file is less than or equal to 1mb
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        $message = '<p style="color: green;">IMAGE UPLOADED GANG</p>';
      } else {
        $message = '<p style="color: red;">IMAGE TOO LARGE GANG</p>';
      }
    } else {
      $message = '<p style="color: red;">NOT A VALID IMAGE GANG</p>';
    }
  } else {
    $message = '<p style="color: red;">IMAGE NOT FOUND GANG</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>
  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
    <h4>Upload Image</h4>
    <input type="file" name="upload" />
    <?php echo $message ?? null ?>
    <button type="submit" name="submit">Submit</button>
  </form>
</body>

</html>