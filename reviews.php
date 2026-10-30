<?php
$file = 'reviews.json';

if(file_exists($file)) {
  $reviews = json_decode(file_get_contents($file), true);
} else {
  $reviews = [];
}
?>
<div class="container py-4">
  <div class="row">

    <?php foreach($reviews as $r) { ?>

      <div class="col-md-4 mb-4">
        <div class="card p-3 shadow-sm h-100">

          <h5><?php echo $r['name']; ?></h5>
<p class="text-muted"><?php echo $r['place']; ?></p>

<p>⭐ <?php echo $r['rating']; ?>/5</p>

<p><?php echo $r['comment']; ?></p>

<!-- ADD THESE TWO -->
<p><strong>Date:</strong> <?php echo $r['date']; ?></p>
<p><strong>Category:</strong> <?php echo $r['category']; ?></p>


    <small class="text-muted">
  <?php echo $r['date']; ?> • <?php echo $r['category']; ?>
</small>


        </div>
      </div>

    <?php } ?>

  </div>
</div>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $newReview = [
    "id" => time(),
    "name" => $_POST['name'],
    "place" => $_POST['place'],
    "rating" => $_POST['rating'],
    "comment" => $_POST['comment'],
    "date" => $_POST['date'],
    "category" => $_POST['category']
  ];

  $reviews = json_decode(file_get_contents($file), true);
  $reviews[] = $newReview;

  file_put_contents($file, json_encode($reviews, JSON_PRETTY_PRINT));

  echo json_encode(["status" => "success"]);
  exit;
}
?>
<?php
header('Content-Type: application/json');
echo json_encode($reviews);
?>