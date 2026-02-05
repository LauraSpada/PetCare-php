<?php
  include_once("../connection.php");

  $get1 = (String)filter_input(INPUT_GET,'table'); 
  if($get1 == 'client'){
    clientList();  
  }
    
  if($get1 == 'vet'){
    vetList(); 
  }   

  if($get1 == 'animal'){
    animalList();  
  } 

  if($get1 == 'consultation'){
    consultationList();  
  } 

 # -------------------------------------------
  function vetList(){

  ?>
    <b><font color="#0000FF">Vet List</font></b>      </br> </br>
    <table border = "1">
    <tr>
     <td><b>Crmv</b></td>        
     <td><b>Admission</b></td>
     <td><b>Name</b></td>    
     <td><b>Salary</b></td>   
     <td><b>Update?</b></td>       
     <td><b>Delete?</b></td>
    </tr>
    
    <?php
        $conn = connectBD();   
        $sql = "SELECT * FROM Vet order by Name";
        $result = mysqli_query($conn,$sql);
        while($i = mysqli_fetch_assoc($result)){
    ?>
         <tr>
            <td><?php echo $i['CRMV'];?></td>
            <td><?php echo date('d/m/y',strtotime($i['admissionDate']))?></td>
            <td><?php echo $i['name'];?></td>
            <td><?php echo $i['salary'];?></td>
   
            <td><a href="<?php echo"../forms/vetFormUpdate.php?var_crmv=". $i['CRMV']."&var_adm_date=".$i['admissionDate']."&var_name=".$i['name']."&var_salary=".$i['salary']?>">Update</a></td>
            <td><a href="<?php echo"delete.php?var_cod=". $i['CRMV']."&table=vet"?> ">Delete</a></td>
        </tr>
    <?php
      } 
      disconnectBD($conn); 
    ?>
    </table>     <h4><a href="../forms/vetFormInsert.html">New Vet</a></h4> 
    <h4><a href="../menuChoiceSearch.php">Back</a></h4>
    <?php
     } 

  function clientList(){
        ?>
          <b><font color="#0000FF">Client List</font></b>      </br> </br>
          <table border = "1">
          <tr>
           <td><b>Cpf</b></td>        
           <td><b>Name</b></td>
           <td><b>Phone</b></td>
           <td><b>Update?</b></td>       
           <td><b>Delete?</b></td>
          </tr>
          
          <?php
              $conn = connectBD();   
              $sql = "SELECT * FROM Client order by Name";
              $result = mysqli_query($conn,$sql);
              while($i = mysqli_fetch_assoc($result)){
          ?>
               <tr>
                  <td><?php echo $i['CPF'];?></td>
                  <td><?php echo $i['name'];?></td>
                  <td><?php echo $i['phone'];?></td>
         
                  <td><a href="<?php echo"../forms/clientFormUpdate.php?var_cpf=". $i['CPF']."&var_name=".$i['name']."&var_phone=".$i['phone']?>">Update</a></td>
                  <td><a href="<?php echo"delete.php?var_cod=". $i['CPF']."&table=client"?> ">Delete</a></td>
              </tr>
          <?php
            } 
            disconnectBD($conn); 
          ?>
          </table>     <h4><a href="../forms/clientFormInsert.html">New Client</a></h4> 
          <h4><a href="../menuChoiceSearch.php">Back</a></h4>
          <?php
           } 
            
  function animalList(){

        ?>
          <b><font color="#0000FF">Animals List</font></b>      </br> </br>
          <table border = "1">
          <tr>      
          <td><b>Animal Id</b></td>
          <td><b>Birth Date</b></td>  
          <td><b>Cpf</b></td>    
          <td><b>Name</b></td> 
          <td><b>Breed</b></td>  
          <td><b>Update?</b></td>       
          <td><b>Delete?</b></td>
          </tr>
          
          <?php
              $conn = connectBD();   
              $sql = "SELECT * FROM Animal order by Name";
              $result = mysqli_query($conn,$sql);
              while($i = mysqli_fetch_assoc($result)){
          ?>
              <tr>
                  <td><?php echo $i['id'];?></td>
                  <td><?php echo date('d/m/y',strtotime($i['birthDate']))?></td>
                  <td><?php echo $i['CPF'];?></td>
                  <td><?php echo $i['name'];?></td>
                  <td><?php echo $i['breed'];?></td>
        
                  <td><a href="<?php echo"../forms/animalFormUpdate.php?var_b_date=". $i['birthDate']."&var_ida=".$i['id']."&var_cpf=".$i['CPF']."&var_name=".$i['name']."&var_breed=".$i['breed']?>">Update</a></td>
                  <td><a href="<?php echo"delete.php?var_cod=". $i['id']."&table=animal"?> ">Delete</a></td>
              </tr>
          <?php
            } 
            disconnectBD($conn); 
          ?>
          </table>     <h4><a href="../forms/animalFormInsert.html">New Animal</a></h4> 
          <h4><a href="../menuChoiceSearch.php">Back</a></h4>
          <?php
          } 
          
  function consultationList(){

            ?>
              <b><font color="#0000FF">Consultation List</font></b>      </br> </br>
              <table border = "1">
              <tr>
              <td><b>ID</b></td>     
              <td><b>CRMV</b></td>     
              <td><b>Animal Id<b></td>
              <td><b>Hour</b></td> 
              <td><b>Date</b></td>  
              <td><b>Reason</b></td> 
              <td><b>Update?</b></td>       
              <td><b>Delete?</b></td>
              </tr>
              
              <?php
                  $conn = connectBD();   
                  $sql = "SELECT * FROM Consultation order by Date";
                  $result = mysqli_query($conn,$sql);
                  while($i = mysqli_fetch_assoc($result)){
              ?>
                  <tr>
                      <td><?php echo $i['id'];?></td>
                      <td><?php echo $i['CRMV'];?></td>
                      <td><?php echo $i['animalId'];?></td>
                      <td><?php echo date('H:i', strtotime($i['hour']))?></td>
                      <td><?php echo date('d/m/y',strtotime($i['date']))?></td>
                      <td><?php echo $i['reason'];?></td>
            
                      <td><a href="<?php echo"../forms/consultationFormUpdate.php?var_id=". $i['id']."&var_crmv=".$i['CRMV']."&var_ida=".$i['animalId']."&var_hour=" . date('H:i', strtotime($i['hour']))."&var_c_date=".$i['date']."&var_reason=".$i['reason']?>">Update</a></td>
                      <td><a href="<?php echo"delete.php?var_cod=". $i['id']."&table=consultation"?> ">Delete</a></td>  
                  </tr>
              <?php
                } 
                disconnectBD($conn); 
              ?>
              </table>     <h4><a href="../forms/consultationFormInsert.html">New Consultation</a></h4> 
              <h4><a href="../menuChoiceSearch.php">Back</a></h4>
              <?php
              } 
            