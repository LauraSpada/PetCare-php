<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Vet</title>
</head>
<BODY>
   <?php
      $get1= filter_input(INPUT_GET,'var_crmv');
      $get2= filter_input(INPUT_GET,'var_adm_date');
      $get3= filter_input(INPUT_GET,'var_name');
      $get4= filter_input(INPUT_GET,'var_salary');
   ?>
   <b><font color="#0000FF">Update Vet Page:</font></b>      </br> </br>

    <form action="../actions/update.php" method="post">
    <input type=hidden name=table value="vet">

    <b> Crmv:</b> <input type="number" name="crmv" size="15" value="<?php echo $get1?>" readonly>       </br></br>

    <b> Admission Date:</b> <input type="date" name="adm_date" size="15" value="<?php echo $get2?>" readonly>    </br></br>

    <b> Name:</b> <input type="text" name="name" size="20" value="<?php echo $get3?>" >       </br></br>

    <b> Salary:</b> <input type="number" name="salary" size="15" value="<?php echo $get4?>">       </br></br>

    <input type="submit" value="Save">

   </form>
   <a href="../index.html">Back</a>
</BODY>
</HTML>