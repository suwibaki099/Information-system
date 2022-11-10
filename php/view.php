<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/view.css">
     
</head>
<script type="text/javascript">
        function makeTableScroll() {
            // Constant retrieved from server-side via JSP
            var maxRows = 17;

            var table = document.getElementById('myTable');
            var wrapper = table.parentNode;
            var rowsInTable = table.rows.length;
            var height = 0;
            if (rowsInTable > maxRows) {
                for (var i = 0; i < maxRows; i++) {
                    height += table.rows[i].clientHeight;
                }
                wrapper.style.height = height + "px";
            }
        }
    </script>
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
    <div class = "wrapper">
    <body onload="makeTableScroll();">
    <div class="scrollingTable">
        <table id="myTable">
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
