<?php
    session_start();
    include("m-config.php");
    $data = json_decode(file_get_contents("php://input"));
    $password = $data->password;
    $username = $data->username;
    $userInfo = $conexion->query("SELECT * FROM ad WHERE nick='$username' AND pass='$password'");
    if(mysqli_num_rows($userInfo)>0){
      $row = mysqli_fetch_array($userInfo);
      $_SESSION['user'] = $row['nick'];
      echo '<script>$location.path("/dashboard");</script>';
      } else {
        echo 'nop';
    }
?>
