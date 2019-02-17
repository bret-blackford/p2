<?php
require 'helpers.php';
session_start();

//$heightFeet = 0;
if( isset($_SESSION['name']) ){
    $name = $_SESSION['name'];
}
if( isset($_SESSION['response']) ){
    $response = $_SESSION['response'];
}
if( isset($_SESSION['bmi']) ){
    $bmi = $_SESSION['bmi'];
}
if( isset($_SESSION['heightFeet']) ){
    $heightFt = $_SESSION['heightFeet'];
} else {
    $heightFt = 0;
}
if( isset($_SESSION['heightInches']) ){
    $heightInches = $_SESSION['heightInches'];
}
if( isset($_SESSION['weight']) ){
    $weight = $_SESSION['weight'];
}
if( isset($_SESSION['dob']) ){
    $dob = $_SESSION['dob'];
}

$girl = TRUE;
if( isset($_SESSION['gender']) ){
    $gender = $_SESSION['gender'];
    if( $gender == 'Male' ){
        $girl = FALSE;
    } else {
        $girl = TRUE;
    }
}

//dump($_SESSION);
session_unset();

function checkSelectFt($heightFt, $inInt) {
    //echo "in checkSelectFt(" . $heightFt . "," . $inInt. ") <br>";
    if ($heightFt == $inInt) {
        return "selected";
    }
    return "";
}
