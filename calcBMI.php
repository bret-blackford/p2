<?php

session_start();
//echo "now in calcBMI.php file <br>";
require 'includes/helpers.php';

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$heightFeet = $_POST['heightFeet'];
$heightInches = $_POST['heightInches'];
$weight = $_POST['weight'];

$dob2 = new DateTime($dob);
$now = new DateTime();
$difference = $now->diff($dob2);
$age = $difference->y;

$totHeightInches = ($heightFeet * 12) + $heightInches;
$bmi = number_format( ($weight * 703) / (pow($totHeightInches, 2)), 2 );

$status = checkHealth($bmi);

$response = $name . ", you are a " . $age . " year old " . $gender;
$response .= " and have a body mass index (BMI) of : " . $bmi . "%";
$response .= " which classifies you as " . $status;


$_SESSION['response']= $response;
$_SESSION['bmi'] = $bmi;
$_SESSION['name'] = $name;
$_SESSION['dob'] = $dob;
$_SESSION['heightFeet'] = $heightFeet;
$_SESSION['heightInches'] = $heightInches;
$_SESSION['weight'] = $weight;
$_SESSION['gender'] = $gender;

header('location: index.php');


function checkHealth($bmi){
    $status = 'obese';
    if( $bmi < 30 ){
        $status = 'overweight';
    } if( $bmi < 25 ) {
        $status = 'normal';
    } if( $bmi < 18.5 ){
        $status = 'underweight';
    }
    return $status;
}