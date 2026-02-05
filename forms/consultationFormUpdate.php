<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Consulta</title>
</head>
<BODY>
   <?php
      $get1= filter_input(INPUT_GET,'var_id', FILTER_VALIDATE_INT);
      $get2= filter_input(INPUT_GET,'var_crmv');
      $get3= filter_input(INPUT_GET,'var_ida');
      $get4= filter_input(INPUT_GET,'var_hour');  
      $get5= filter_input(INPUT_GET,'var_c_date');
      $get6= filter_input(INPUT_GET,'var_reason');

      $hour = $get4 ? substr($get4, 0, 5) : '';
   ?>
   <b><font color="#0000FF">Tela de Edição de Consulta</font></b>      </br> </br>

    <form action="../actions/update.php" method="post">
     <input type=hidden name=table value="consultation">

     <b> Id:</b> <input type="number" name="id" size="30" value="<?php echo $get1?>" readonly>    </br></br>

    <b> Vet CRMV:</b> <input type="text" name="crmv" size="15" value="<?php echo $get2?>" readonly>      </br></br>

    <b> Animal ID:</b> <input type="number" name="ida" size="30" value="<?php echo $get3?>" readonly>    </br></br>
    
    <b> Hour:</b> <input type="time" name="hour" size="50" value="<?php echo $hour; ?>">       </br></br>

    <b> Date:</b> <input type="date" name="c_date" size="15" value="<?php echo $get5?>">       </br></br>

    <b> Reason:</b> <input type="text" name="reason" size="20" value="<?php echo $get6?>">       </br></br>

    <input type="submit" value="Save">

   </form>
   <a href="../index.html">Back</a>
</BODY>
</HTML>