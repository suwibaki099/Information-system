<?php

/* This is a php code that is connecting to the database and selecting all the data from the table
info. */
$connect = mysqli_connect("localhost", "root", "", "hcenter");
$query = "SELECT * from info where age BETWEEN 5 and 8";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/hompage.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>Health Center</title>

</head>

<div class="wrapper">
    <div class="multi_color_border"></div>
    <div class="top_nav">
        <div class="left">
            <div class="logo">
                <p><span>Health</span>Center</p>
            </div>
            <div class="search_bar">
                <input type="text" placeholder="Search">
            </div>
        </div>
        <div class="right">
            <ul>
                <li><a href="home.php">Home</a></li>
                <div class="login">
                    <button class="dropbtn"><img src="../images/admin.png"></button>
                    <div class="content">

                        <a href="logout.php">LogOut</a>
                    </div>
                </div>
            </ul>

        </div>
    </div>
    <div class="bottom_nav">
        <ul>
            <li><a href="0-12.php">0-12 Months Old</a></li>
            <li><a href="1-4.php">1-4 Years Old</a></li>
            <li><a href="5-8.php">5-8 Years Old</a></li>
            <li><a href="9-14.php">9-14 Years Old</a></li>
            <li><a href="15-18.php">15-18 Years Old</a></li>
        </ul>
    </div>


    <a href="form.php" class="material-icon floating-btn"><img src="../images/add.png"></a>
</div>


<?php
/* Fetching the data from the database and displaying it in the table. */
while ($row = mysqli_fetch_array($result)) {


?>
    <br>
    <div class="design clearfix  btn-xs view_data" id="<?php echo $row["id"]; ?>">

        <?php echo "<img src='../images/" . $row["pic"] . "' alt='Image' height=105 width=110>"; ?>
        <br> <label>Name: <?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?> </label>
        <label>Age: <?php echo $row["age"]; ?></label>
        <label>Address: <?php echo $row["address"]; ?></label>

    </div>
<?php
}
?>

</html>
<div id="my-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2>Children's Information</h2>
            <h4>Date: </h4>
        </div>
        <div class="modal-body" id="child_detail">

            <div class="modal-footer">
                <div class="btn">
                    <button type="button" class="btn1">BMI</button>
                    <button type="button" class="btn2">Update</button>
                    <button type="button" class="btn3">Delete</button>
                    <button type="button" class="btn4">Print</button>
                </div>
                <h3>Modal Footer</h3>
            </div>

        </div>
    </div>
</div>
</div>

<script>
    /* The above code is using ajax to call the select.php file and pass the child_id to the select.php
file. */
    $(document).ready(function() {
        $('.view_data').click(function() {
            var child_id = $(this).attr("id");
            $.ajax({
                url: "select.php",
                method: "post",
                data: {
                    child_id: child_id
                },
                success: function(data) {
                    $('#child_detail').html(data);
                    $('#my-modal').modal("show");

                }

            });
        });
    });
</script>