<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Client:</title>
</head>
<BODY>
   <?php
      $get1= filter_input(INPUT_GET,'var_cpf');
      $get2= filter_input(INPUT_GET,'var_name');
      $get3= filter_input(INPUT_GET,'var_phone');
   ?>
   <b><font color="#0000FF">Client Update Page:</font></b>      </br> </br>

    <form action="../actions/update.php" method="post">
     <input type=hidden name=table value="client">

      <b>Cpf:</b> <input type="text" name="cpf" size="15" value="<?php echo $get1?>" readonly>       </br></br>

      <b>Name:</b> <input type="text" name="name" size="30" value="<?php echo $get2?>">    </br></br>

      <b>Phone:</b> <input type="text" name="phone" size="15" value="<?php echo $get3?>">       </br></br>

    <input type="submit" value="Save">

   </form>
   <a href="../index.html">Back</a>
</BODY>
</HTML>