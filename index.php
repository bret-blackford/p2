<?php
// written by: M. Bret Blackford
// date: February 2019

require 'includes/logic.php';
?>


<!doctype html>
<html lang="en">

    <head>
        <title>P2</title>
        <meta charset='utf-8'>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <h1>BMI Calculator</h1>
        <form method='POST' action='calcBMI.php'>
            <fieldset>
                <label id='line'>Name
                    <input type='text' name='name' value='<?= $name ?? '' ?>'>
                </label>
                <label id='line'>Date of Birth
                    <input type="date" name='dob' value='<?= $dob ?? '' ?>'>
                </label>
                <div id='gender-block'>
                    Gender:
                    <input type="radio" name='gender' value='Male'>
                    <label>male</label>
                    <input type="radio" name='gender' value='Female'>
                    <label>female</label>
                </div>
                <div id='height-block'>
                    <label>Height in feet
                        <select name="heightFeet" >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </label
                    <label>Height in inches
                        <select name="heightInches" >
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>
                    </label>
                </div>

                <div id='wight-block'>
                <label>Weight in lbs.
                    <input type="number" name='weight' step='0.1' value='<?= $weight ?? '' ?>'>
                </label>
                </div>
            </fieldset>
            <input type="submit" value='calculate' class='btn'>
        </form>
        
        <div id='results'>
            <?= $response ; ?>
        </div>
    </body>

</html>
