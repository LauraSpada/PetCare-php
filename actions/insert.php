<?php
 include_once("../connection.php");

 $post1 = (String)filter_input(INPUT_POST,'table');
 
 if($post1 == 'client'){
    clientRegister($_POST["cpf"], $_POST["name"],$_POST["phone"]);  
    header("Location:../forms/clientFormInsert.html");
 }  

 if($post1 == 'vet'){
    vetRegister($_POST["crmv"], $_POST["name"],$_POST["adm_date"], $_POST["salary"]);  
    header("Location:../forms/vetFormInsert.html");
 }

 if($post1 == 'animal'){
    animalRegister($_POST["b_date"],$_POST["cpf"], $_POST["name"], $_POST["breed"]); 
    header("Location:../forms/animalFormInsert.html");
 }

 if($post1 == 'consultation'){
   consultationRegister($_POST["crmv"],$_POST["ida"], $_POST["hour"], $_POST["c_date"], $_POST["reason"]);  
   header("Location:../forms/consultationFormInsert.html");
 }

#--------------------------------------------------------

 function clientRegister($c,$n,$p){
   $conn = connectBD();
   $data ="INSERT INTO Client (CPF,name,phone) VALUES ('{$c}','{$n}','{$p}')"; 
   mysqli_query($conn,$data);               
   echo "Success!";
   disconnectBD($conn);
 }

 function vetRegister($crmv,$name,$adm_date,$salary){
    $conn = connectBD();
    $data ="INSERT INTO Vet (CRMV,name,admissionDate,salary) VALUES ({$crmv},'{$name}','{$adm_date}',{$salary})"; 
    mysqli_query($conn,$data);               
    echo "Success!";
    disconnectBD($conn);
  }

  function animalRegister($b_date,$cpf,$name,$breed){
    $conn = connectBD();
    $data ="INSERT INTO Animal (birthDate,CPF,name,breed) VALUES ('{$b_date}','{$cpf}','{$name}','{$breed}')"; 
    mysqli_query($conn,$data);               
    echo "Success!";
    disconnectBD($conn);
  }

  function consultationRegister($crmv,$ida,$hour,$c_date,$reason){
   $conn = connectBD();
   $data ="INSERT INTO Consultation (CRMV,animalId,Hour,Date,Reason) VALUES ({$crmv},{$ida},'{$hour}','{$c_date}','{$reason}')"; 
   mysqli_query($conn,$data);               
   echo "Success!";
   disconnectBD($conn);
 }

?>
