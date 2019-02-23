<?php
/*
 * author: M. Bret Blackford
 * Date: February 2019
 */
require 'Form.php';
require 'helpers.php';

$form = new DWA\Form($_POST);
$submitted = $form->isSubmitted();
$errors = [];

if ($submitted) {
    $errors = $form->validate(
            [
                'name' => 'required|alpha',
                'dob' => 'required',
                'weight' => 'required|numeric|min:0|max:1000',
                'heightFeet' => 'required|digit|min:1|max:8',
                'heightInches' => 'required|digit|min:0|max:12',
                'gender' => 'required',
    ]);
}

function populateFields() {
    $formData->name = $form->get('name', '777');
}

function isSelected($selected, $value) {
    if ($selected == $value) {
        echo 'selected';
    } else {
        '';
    }
}

function isChecked($selected, $value) {
    if ($selected == $value) {
        echo 'checked';
    } else {
        '';
    }
}
