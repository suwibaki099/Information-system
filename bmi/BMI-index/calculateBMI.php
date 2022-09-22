<?php

$BMI;

if(isset($_POST['calculate'])){
  if (!isset($_POST['weight'])) {
    return 'Please enter your weight';
    exit();
  }
  if (!isset($_POST['height'])) {
    return 'Please enter your height';
    exit();
  }
}

$weight = filter_var(htmlentities(floatval($_POST['weight'])),FILTER_SANITIZE_NUMBER_FLOAT);
$height = filter_var(htmlentities(floatval($_POST['height'])),FILTER_SANITIZE_NUMBER_FLOAT);

function calculateBMI($weight, $height){
  return pow($weight / ($height / 100), 2);
}

header('Location: index.php');