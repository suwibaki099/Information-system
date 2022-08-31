<?php
$servername= "localhost";
$uname="root";
$pw="";
$dbname="hcenter"; 

        $conn=mysqli_connect($servername,$uname,$pw,$dbname);
        if ($conn == false) {
        die("Connection failed:" . mysqli_connect_error());
        }
?>