<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/quiz_git/resource/php/db/config.php';
class quiz extends config{
public function __construct($a1=null,$a2=null,$a3=null,$a4=null,$a5=null,$aname=null){
    $this->a1 = $a1;
    $this->a2 = $a2;
    $this->a3 = $a3;
    $this->a4 = $a4;
    $this->a5 = $a5;
    $this->aname = $aname;
    }
    public function check(){
      $a1 = $this->a1;
      $a2 = $this->a2;
      $a3 = $this->a3;
      $a4 = $this->a4;
      $a5 = $this->a5;
      $aname = $this->aname;
        $config = new config;
        $con = $config->Connect();
        $ascore = 0;
        $sql = "SELECT * FROM `quiz` WHERE `name` = 'Master' ";
        $data = $con->prepare($sql);
        $data->execute();
        $rows = $data->fetchAll();
          foreach ($rows as $row) {
              $q1 =  $row->q1;
              $q2 =  $row->q2;
              $q3 =  $row->q3;
              $q4 =  $row->q4;
              $q5 =  $row->q5;
              $name =  $row->name;
              $score =  $row->score;
      }
      if($q1 == $a1){
      $ascore++;
      }else {

      }
      if($q2 == $a2){
      $ascore++;
      }else {

      }
      if($q3 == $a3){
      $ascore++;
      }else {

      }
      if($q4 == $a4){
      $ascore++;
      }else {

      }
      if($q5 == $a5){
      $ascore++;
      }else {

      }
      $sql = "INSERT INTO `quiz`( `q1`, `q2`, `q3`, `q4`, `q5`, `score`, `name`) VALUES (?,?,?,?,?,?,?)";
      $data = $con->prepare($sql);
      $data->execute([$a1,$a2,$a3,$a4,$a5,$ascore,$aname]);
      }
  }

 ?>
