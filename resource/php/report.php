<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/quiz_git/resource/php/db/config.php';
class report extends config{

public function show(){
$config = new config;
$con = $config->Connect();
$sql = "SELECT * FROM `quiz` WHERE `quiz_id` >= 2 ORDER BY `Score` DESC";
$data = $con->prepare($sql);
$data->execute();
$rows = $data->fetchAll();
           echo "<table class='table  table-striped table-bordered table-sm table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl' style=width:100%>";
           echo '<tr>';
           echo '<td class="text-center" style= font-weight:bold;>Name</td><td class="text-center" style= font-weight:bold;>Score</td>';
           echo '</tr>';
           foreach ($rows as $row) {
             $name =  $row->name;
             $score =  $row->score;
             echo '<tr>';
               echo '<td class="text-center">'.$name.'</td>';
               echo '<td class="text-center">'.$score.'</br></td>';
                 echo '</tr>';
             }
             echo '</table>';
}
}

 ?>
