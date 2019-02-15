<?php

session_start();
require 'includes/helpers.php';

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$heightFeet = $_POST['heightFeet'];
$heightInches = $_POST['heightInches'];
$weight = $_POST['weight'];

echo "name[".$name."] dob[".$dob."] gender[".$gender."]<br>";
echo 'height ft['.$heightFeet.'] height inch['.$heightInches.'] weight['.$weight.']<br>';





