<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Animal:</title>
</head>
<BODY>
   <?php
      $get1= filter_input(INPUT_GET,'var_b_date');
      $get2= filter_input(INPUT_GET,'var_ida');
      $get3= filter_input(INPUT_GET,'var_cpf');
      $get4= filter_input(INPUT_GET,'var_name');
      $get5= filter_input(INPUT_GET,'var_breed');
   ?>
   <b><font color="#0000FF">Update Animal Page:</font></b>      </br> </br>

   <form action="../actions/update.php" method="post">
      <input type=hidden name=table value="animal">

      <b> Birth Date:</b> <input type="date" name="b_date" size="15" value="<?php echo $get1?>" >       </br></br>

      <b> Id:</b> <input type="number" name="ida" size="30" value="<?php echo $get2?>" readonly>    </br></br>

      <b> Cpf:</b> <input type="text" name="cpf" size="15" value="<?php echo $get3?>" readonly>       </br></br>

      <b> Name:</b> <input type="text" name="name" size="15" value="<?php echo $get4?>">       </br></br>

      <b> Breed:</b> <input type="text" name="breed" size="15" value="<?php echo $get5?>">       </br></br>

      <input type="submit" value="Save">

   </form>

   <a href="../index.html">Back</a>
</BODY>
</HTML>