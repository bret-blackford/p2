<?php

function calcBMI($form) {

    $name = $form->get('name');
    $dob = $form->get('dob');
    $gender = $form->get('gender');
    $heightFeet = $form->get('heightFeet');
    $heightInches = $form->get('heightInches');
    $weight = $form->get('weight');

    $dob2 = new DateTime($dob);
    $now = new DateTime();
    $difference = $now->diff($dob2);
    $age = $difference->y;

    $totHeightInches = 0;
    $bmi = 0.00;
    if ($form->isSubmitted()) {
        $totHeightInches = ($heightFeet * 12) + $heightInches;
        $bmi = number_format(($weight * 703) / (pow($totHeightInches, 2)), 2);
    }

    $status = checkHealth($bmi);

    $response = $name . ", you are a " . $age . " year old " . $gender;
    $response .= " and have a body mass index (BMI) of : <b>" . $bmi . "</b>%";
    $response .= " which classifies you as <b>" . $status . "</b>";

    return $response;
}

function checkHealth($bmi) {
    $status = 'obese';
    if ($bmi < 30) {
        $status = 'overweight';
    } if ($bmi < 25) {
        $status = 'normal';
    } if ($bmi < 18.5) {
        $status = 'underweight';
    }
    return $status;
}
