<?php
  include_once("../connection.php");
  $get1 = (String)filter_input(INPUT_GET,'table'); 
  $get2 = filter_input(INPUT_GET,'var_cod'); 

  if($get1 == 'client'){
    clientDelete($get2);
    header("Location:select.php?&table=client");
  }

  if($get1 == 'vet'){
    VetDelete($get2);
    header("Location:select.php?&table=vet");
  }

 if($get1 == 'animal'){
    AnimalDelete($get2);
    header("Location:select.php?&table=animal");
  }

 if($get1 == 'consultation'){
    ConsultationDelete($get2);
    header("Location:select.php?&table=consultation");
  }

#--------------------------------------------------------

  function clientDelete($cpf){
    $conn = connectBD();
    $data= "DELETE FROM Client WHERE CPF = '$cpf'";
    mysqli_query($conn,$data);
    disconnectBD($conn);
  }

  function VetDelete($crmv){
    $conn = connectBD();
    $data= "DELETE FROM Vet WHERE CRMV = $crmv";
    mysqli_query($conn,$data);
    disconnectBD($conn);
  }

  function AnimalDelete($id){
    $conn = connectBD();
    $data= "DELETE FROM Animal WHERE id = $id";
    mysqli_query($conn,$data);
    disconnectBD($conn);
  }

  function ConsultationDelete($id){
    $conn = connectBD();
    $data= "DELETE FROM Consultation WHERE Id = $id";
    mysqli_query($conn,$data);
    disconnectBD($conn);
  }

?>
