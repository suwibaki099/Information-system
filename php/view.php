<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/view.css">
     
</head>

<?php
    $servername="localhost";
    $username="root";
    $password="";
    $db="child_bmi";
    $con=mysqli_connect($servername,$username,$password,$db);

    if(!$con)
    {
    die("Connection Failed". mysqli_connect_error());
    }
    $sql="SELECT * FROM bmi_calculator ORDER BY id";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
    ?>
    <table border="3" id="table">
    <tr>
    <td><b>ID</b></td>
    <td><b>Height</b></td>
    <td><b>Weight</b></td>
    <td><b>BMI</b></td>
    <td><b>Date</b></td>
    </tr>

    <?php
    while($row=mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['height'];?></td>
    <td><?php echo $row['weight'];?></td>
    <td><?php echo $row['score'];?></td>
    <td><?php echo $row['date_now'];?></td>
    </tr>
<?php
    }
}

    mysqli_close($con);
    ?>
