<?php
 function connectBD(){
  $servername = "localhost";     $database = "petcare";
  $username = "root";             $password = "";
  $conn = mysqli_connect($servername,$username,$password,$database);
  if(!$conn){
    die("Connection failed".mysqli_connect_error());
  }else{
   echo "success";
  }
  return($conn);
}
//----------------------------
function disconnectBD($c){
    mysqli_close($c);
}
?>