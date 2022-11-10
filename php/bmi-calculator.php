<?php
 // MUST BE POST REQUEST TO PREVENT DIRECT ENTERANCE TO THE PAGE BY WRITING OUR PHP FILE URL

      $database_host = "localhost";              
      $database_user = "root";                   
      $database_password = "";                        
      $database_name = "child_bmi";
      $db_conn = mysqli_connect($database_host, $database_user, $database_password, $database_name); 

      if(!$db_conn){
      echo "Sorry there is something wrong with our System, Please try again later!"; 
      }

      if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $height = $_POST['height'];  // HEIGHT
      $weight = $_POST['weight']; // WEIGHT


      if($height == '' || $weight == ''){
         echo  $Error = "<center>The input values are required.</center>";
      }
      elseif (filter_var($height, FILTER_VALIDATE_FLOAT) === false || filter_var($weight, FILTER_VALIDATE_FLOAT) === false) {
         echo $Error = "<center>The input value must be a number only.</center";
      }
      else

      {
      $bmiRounded = ($weight / $height / $height) * 10000;
      $total_bmi = round($bmiRounded, 1);


      // STORE USER INFO 
      $sql = "INSERT INTO bmi_calculator (height, weight, score, date_now) VALUES ('$height', '$weight', '$total_bmi', NOW())" ;
      if (mysqli_query($db_conn, $sql)) {
      echo "";
      }

      if($total_bmi > 39.9){
      echo ' <center>Uhh! Your BMI Score is '.$total_bmi.' Which means You\'re in  <strong>Obesity</strong> class III.</center>';      
      }elseif($total_bmi >= 35){
      echo '<center>Uhh! Your BMI Score is '.$total_bmi.' Which means You\'re in  <strong>Obesity</strong> class II.</center>';      
      }elseif($total_bmi >= 30){
      echo '<center>Uhh! Your BMI Score is '.$total_bmi.' Which means You\'re in  <strong>Obesity</strong> class I.</center>';     
      }else if($total_bmi >= 25){
      echo '<center>Uhh! Your BMI Score is '.$total_bmi.' Which means You\'re <strong>Overweight</strong>.</center>';  
      }elseif($total_bmi <= 18.5){
      echo '<center>Uhh! Your BMI Score is '.$total_bmi.' Which means You\'re <strong>Underweight</strong>.</center>';      
      }else{
      echo '<center>Great! Your BMI Score is '.$total_bmi.' Which means You\'re in <strong>Average</strong> weight.</center>';       
            }

         }
      }
      
      else{
      echo '<span class="response-message">Sorry, Somthing wrong happen, please try again later.</span>';      
         }  



    exit(); 
?>

