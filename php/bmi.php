<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style-bmi.css">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>   
</head>

<button class="back" onclick="history.back()">Back</button>
<body>

    <h1><b>Body Mass Index Calculator</h1>
<form class="form" action="" id="check_bmi">
    <div class="row-one">
        <label for="height">Height:</label>

        <input type="text" class="text-input1"  id="height" name="height" placeholder="cm">
        <label for="weight">Weight:</label>
        <input type="text" class="text-input2" id="weight" name="weight" placeholder="kg">
    </div>

    <div id="response-displayer"></div><br>
        <input type="submit" name="button" id="button" value="Calculate">
        <button onclick="ClearFields();">Clear</button>
</form>

    <h2><b>Body Mass Index Table</h2>
</body>
</html>


<script>
    $(document).ready(function(){ // WHEN PAGE IS READY
        // SEND HEIGHT AND WEIGHT USING AJAX
    $("#check_bmi").on('submit', function(e){ // ON SUBMIT
        e.preventDefault(); // PREVENT DEFAULT BROWSER BEHAVOIR MEANS REFRESHING
        //PUT BOTH VALUES IN VARIABLE TO PASS TO PHP FILE PROCCESSOR
        var height = $("#height").val(),
            weight = $("#weight").val();
    $.ajax({            // AJAX REQUEST
    type: 'POST',  // SENDING METHOD => POST
    url: '../php/bmi-calculator.php', // MAIN PHP PROCCESSOR PAGE
    data: {
        height: height,  // USER SELLECTED HEIHT
        weight:weight   // USER SELLECTED WEIGHT
        },
    beforeSend: function() { // SHOW SOMETHING FOR USER WHILE WAITING THE RESULT
        $('#button').attr("value", "Wait..."); // CHANGE BUTTON TEXT TO Wait...
    },
    success: function(php_response) {          // PHP RESPONSE HANDLER
        $('#button').attr("value", "Check BMI");// CHANGE BUTTON TEXT TO Check BMI 
        $("#response-displayer").show(); // SHOW THE RESPONSE HANDLER ID
        $("#response-displayer").html(php_response).fadeIn(500);// DISPLAY RESULT
            }
        });
        });  
    });
</script>
<script>function ClearFields() {

document.getElementById("height").value = "";
document.getElementById("weight").value = "";
window.location.reload();
}</script>

<?php require "../php/view.php" ?><br>






