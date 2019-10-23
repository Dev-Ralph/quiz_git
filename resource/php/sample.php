<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/quiz_git/resource/php/db/config.php';
class sample extends config{

public function disp(){
$config = new config;
$con = $config->Connect();
$sql = "SELECT * FROM `questions`";
$data = $con->prepare($sql);
$data->execute();
$rows = $data->fetchAll();
shuffle($rows);
foreach ($rows as $row) {
  echo "<div class='container-fluid pt-4'>";
  echo "<div class='row justify-content-center'>";
  echo " <div class='col-md-6'>";
  echo "<div class='card' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
  echo "<div class='card-header text-white bg-white'><h2 style='color:#d75093'>Question</h2></div>";
  echo "<div class='card-body'>";
  echo "<div class='col-md-12'>";
      echo "<h2 class='col' style='font-size: 20px;'>$row->question</h2>";
      echo "</div>";
      echo "</div>";
      echo "<div class='form-group row pl-5'>";
      echo "<div class='col-md-6'>";
      echo "<input type='radio' name='a$row->id' value='A'> $row->choice1";
      echo "</div>";
      echo "</div>";
      echo "<div class='form-group row pl-5'>";
      echo "<div class='col-md-6'>";
      echo "<input type='radio' name='a$row->id' value='B'> $row->choice2";
      echo "</div>";
      echo "</div>";
      echo "<div class='form-group row pl-5'>";
      echo "<div class='col-md-6'>";
      echo "<input type='radio' name='a$row->id' value='C'> $row->choice3";
      echo "</div>";
      echo "</div>";
      echo "<div class='form-group row pl-5'>";
      echo "<div class='col-md-6'>";
      echo "<input type='radio' name='a$row->id' value='D'> $row->choice4";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";



           }
}
}

 ?>
