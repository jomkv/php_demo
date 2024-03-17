<?php include 'components/header.php'; ?>

<?php
$query = "SELECT * FROM feedback";
$res = mysqli_query($conn, $query);
$feedbacks = mysqli_fetch_all($res, MYSQLI_ASSOC); // format as associative array
?>

<h2>Feedback</h2>

<?php if (empty($feedbacks)) : ?>
  <p>no feedbacks</p>
<?php else : ?>
  <?php foreach ($feedbacks as $item) : ?>
    <div class="card my-3 w-75">
      <div class="card-body text-center">
        <?php echo $item["body"]; ?>
        <div class="text-secondary mt-2">
          By <?php echo $item["name"]; ?>
          <br>
          on <?php echo $item["date"]; ?>
        </div>
      </div>
    </div>
  <?php endforeach ?>
<?php endif ?>

<?php include 'components/footer.php'; ?>