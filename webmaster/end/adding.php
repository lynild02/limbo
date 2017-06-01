<?php include 'm-config.php';
$if(isset($_POST['send'])){
  $title=$_POST['title-art'];
  $desc=$_POST['description'];
  $date=$_POST['date'];
  $body=$_POST['body'];
  $nau=$_POST['nau'];
  $iau=$_POST['iau'];
  $table=$_POST['table'];
  echo $table;
  $query="INSERT INTO $table VALUES(null,'$title',null,null,'$img','$img2','$date','$nau','$iau','$desc','$body',null)";
  if($query){
    echo $table;
  } else {
    echo 'No mms';
  };
  //$wconexion->query($query);
}
