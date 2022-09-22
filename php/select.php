<link rel="stylesheet" type="text/css" href="../css/modal.css">
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
          echo  "<div align=center><img  src='../images/".$row["pic"]."' height=160 width=150 ></div>" ;
           
          $output .= ' 
         
               
                <tr>  
                    
                     <td width="20%"><label>First Name</label></td>  
                     <td width="20%">'.$row["fname"].' </td>  
          
          
                </tr>  

               
                <tr>  
                     <td width="20%"><label>Last Name</label></td>  
                     <td width="20%">'.$row["lname"].'</td>  
                </tr>  
             
             
                
                <tr>  
                     <td  width="20%"><label>Age</label></td>  
                     <td  width="20%">'.$row["age"].'</td>  
                </tr>  
                  
                <tr>  
                     <td  width="20%"><label>Birth Date</label></td>  
                     <td  width="20%">'.$row["bday"].' </td>  
                </tr> 
                <tr>  
                     <td  width="20%"><label>Gender</label></td>  
                     <td  width="20%">'.$row["gender"].' </td>  
                </tr> 
                <tr>  
                    <td  width="20%"><label>Address</label></td>  
                    <td  width="20%">'.$row["address"].' </td>  
                </tr> 
                <tr>  
                    <td  width="20%"><label>Height</label></td>  
                    <td  width="20%">'.$row["height"].' </td>  
                </tr> 
                <tr>  
                    <td  width="20%"><label>Weight</label></td>  
                    <td  width="20%">'.$row["weight"].' </td>  
                </tr> 
                <tr>  
                     <td  width="20%"><label>Shots</label></td>  
                     <td  width="20%">'.$row["shot"].' </td>  
                </tr> 
                <tr>  
                    <td  width="20%"><label>Vitamins</label></td>  
                    <td  width="20%">'.$row["vit"].' </td>  
                </tr> 
                <tr>  
                     <td  width="20%"><label>Medicine</label></td>  
                    <td  width="20%">'.$row["meds"].' </td>  
                </tr> 
                <tr>  
                     <td  width="20%"><label>Medical History</label></td>  
                     <td  width="20%">'.$row["medhis"].' </td>  
                </tr> 
                <tr>  
                
                     <td  width="20%"><label>Guardian - Firstname</label></td>  
                     <td  width="20%">'.$row["pfname"].' </td>  
                </tr> 
                <tr>  
                     <td width="20%"><label>Guardian - Lastname</label></td>  
                     <td width="20%">'.$row["plname"].' </td>  
                </tr> 
                <tr>  
                     <td width="20%"><label>Civil Status</label></td>  
                     <td width="20%">'.$row["civstatus"].' </td>  
                </tr>
                <tr>  
                     <td width="20%"><label>Relationship to the Child</label></td>  
                     <td width="20%">'.$row["relate_child"].'</td>  
                </tr> 
                <tr>  
                     <td width="20%"><label>Address</label></td>  
                     <td width="20%">'.$row["guardian_add"].' </td>  
                </tr> 
                <tr>  
                     <td width="20%"><label>Contact Number</label></td>  
                     <td width="20%">'.$row["contact"].' </td>  
                </tr>  
             
                

               
                 
                ';  
                
      }  
      
      
      $output .= "</table></div>";  
      echo $output;  
    
 }  

 
 ?>

 
 
