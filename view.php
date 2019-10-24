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
 </style>
 <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <h1 class="pb-2" style='color:#d75093'>Quiz Scores</h1>
      </div>
        <?php
          require_once $_SERVER['DOCUMENT_ROOT'].'/quiz_git/resource/php/report.php';
          $report = new report;
          $report->show();
          ?>
        </div>
        <div class="container">
          <div class="row">
            <a href="index.php" class="ml-auto">Go back</a>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
