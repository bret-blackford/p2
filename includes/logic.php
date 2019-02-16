<?php
require 'includes/helpers.php';
session_start();

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
    $heightfeet = $_SESSION['heightFeet'];
}
if( isset($_SESSION['heightInches']) ){
    $heightInches = $_SESSION['heightInches'];
}
if( isset($_SESSION['weight']) ){
    $weight = $_SESSION['weight'];
}

dump($_SESSION);

session_unset();