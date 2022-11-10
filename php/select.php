<link rel="stylesheet" type="text/css" href="../css/modal.css">
<link rel="stylesheet" type="text/css" href="../css/table.css">
<?php  
 if(isset($_POST["child_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "hcenter");  
      $query = "SELECT * FROM info WHERE id = '".$_POST["child_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      
    
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
          echo  "<div class='pic'><img  src='../images/".$row["pic"]."' height=132 width=135 ></div>" ;
           
          $output .= ' 
         
               <tr>
               <td><b>Name of Child</b></td>
               <td ><b>Age</b></td>
               <td><b>Birthdate</b></td>
               <td><b>Gender</b></td>
               <td><b>Address</b></td>
               <td><b>Height</b></td>
               <td><b>Weight</b></td>
               <td><b>Shot</b></td>
               <td><b>Vitamins</b></td>
               <td><b>Medicine</b></td>
               <td><b>Medical History</b></td>
               <td><b>Guardian-Name</b></td>
               <td><b>Civil Status</b></td>
               <td><b>Relationship</b></td>
               <td><b>Guardian-Address</b></td>
               <td><b>Contact</b></td>
               </tr>

               <tr>
               <td >'.$row["fname"].' '.$row["lname"].'</td>
               <td >'.$row["age"].'</td>
               <td>'.$row["bday"].'</td>
               <td>'.$row["gender"].'</td>
               <td>'.$row["address"].'</td>
               <td>'.$row["height"].'</td>
               <td>'.$row["weight"].'</td>
               <td>'.$row["shot"].'</td>
               <td>'.$row["vit"].'</td>
               <td>'.$row["meds"].'</td>
               <td>'.$row["medhis"].'</td>
               <td>'.$row["pfname"].' '.$row["plname"].'</td>
               <td>'.$row["civstatus"].'</td>
               <td>'.$row["relate_child"].'</td>
               <td>'.$row["guardian_add"].'</td>
               <td>'.$row["contact"].'</td>

               </tr>
                
                

               
                 
                ';  
                
      }  
      
      
      $output .= "</table></div>";  
      echo $output;  
    
 }  

 
 ?>

 
 
