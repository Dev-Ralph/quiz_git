<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/quiz_git/resource/php/quiz.php';
if (isset($_POST['submit'])) {
$quiz = new quiz($_POST['a1'],$_POST['a2'],$_POST['a3'],$_POST['a4'],$_POST['a5'],$_POST['aname']);
$quiz->check();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="resource/css/style.css">
  <link href="vendor/fonts/css/fontawesome.css" rel="stylesheet">
  <link href="vendor/fonts/css/brands.css" rel="stylesheet">
  <link href="vendor/fonts/css/solid.css" rel="stylesheet">
</head>
<style media="screen">
body{
  background-color: rgb(252, 252, 252);
}
.zoom {
  transition: transform .2s; /* Animation */
}

.zoom:hover {
  transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<body>
  <form action="" method="POST">
  <div class="container-fluid pt-5">
    <div class="row justify-content-center">
      <div class="form-group">
      <input type="text" id="aname" name="aname" placeholder="Enter Your Name" class="form-control col ml-5" required autofocus>
    </div>
    </div>
  </div>

  <?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/quiz_git/resource/php/sample.php';
  $sample = new sample;
  $sample->disp();

  ?>
  <div class="container-fluid pt-5">
    <div class="row justify-content-center">
      <div class="form-group">
      <input type="submit" name="submit" value="Submit" class="form-control col ml-5" required autofocus>
    </div>
    </div>
  </div>
</form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
