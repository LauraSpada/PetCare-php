<?php
 include_once("../connection.php");

 $post1 = (String)filter_input(INPUT_POST,'table'); 

  if($post1 == 'client'){
    clientUpdate($_POST["cpf"], $_POST["name"],$_POST["phone"]);
    header("Location: select.php?&table=client");
  }

  if($post1 == 'vet'){
    vetUpdate($_POST["crmv"],$_POST["adm_date"],$_POST["name"],$_POST["salary"]);
    header("Location: select.php?&table=vet");
  }

  if($post1 == 'animal'){
    animalUpdate($_POST["b_date"],$_POST["ida"],$_POST["cpf"], $_POST["name"], $_POST["breed"]);
    header("Location: select.php?&table=animal");
  }

  if($post1 == 'consultation'){
    consultationUpdate($_POST["id"], $_POST["crmv"],$_POST["ida"], $_POST["hour"], $_POST["c_date"],$_POST["reason"]);
    header("Location: select.php?&table=consultation");
  }

#--------------------------------------------------------

 function clientUpdate($c,$n,$p){
   $conn = connectBD();
   $data="UPDATE Client
           SET    CPF='{$c}',name='{$n}',phone='{$p}'
           WHERE  CPF = '{$c}'";  
    mysqli_query($conn,$data);
    disconnectBD($conn);
 }

 function vetUpdate($crmv,$date,$name,$salary){
  $conn = connectBD();
  $data="UPDATE Vet
          SET    CRMV={$crmv},admissionDate='{$date}',name='{$name}',salary={$salary}
          WHERE  CRMV = {$crmv}";  
   mysqli_query($conn,$data);
   disconnectBD($conn);
}

function animalUpdate($b_date,$ida,$cpf,$name,$breed){
  $conn = connectBD();
  $data="UPDATE Animal
          SET    id='{$ida}',birthDate='{$b_date}',CPF='{$cpf}',name='{$name}',breed='{$breed}'
          WHERE  id = {$ida}";  
   mysqli_query($conn,$data);
   disconnectBD($conn);
}

function consultationUpdate($id,$crmv,$ida,$hour,$c_date,$reason){
  $conn = connectBD();
  $data="UPDATE Consultation
          SET    CRMV={$crmv},animalId={$ida},hour='{$hour}',`date`='{$c_date}',reason='{$reason}'
          WHERE  id = {$id}";  
   mysqli_query($conn,$data);
   disconnectBD($conn);
}

?>
