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
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <h1>BMI Calculator</h1>
        Enter the information below and the app will calculate your body mass index, or BMI, which gives you and indication if you are at a healthy body weight.
        <form method='POST' action='calcBMI.php' class='form'>
            <fieldset>
                <label id='line'>Name
                    <input type='text' name='name' value='<?= $name ?? ''; ?>'>
                </label>
                <label id='line'>Date of Birth
                    <input type="date" name='dob' value="<?= $dob ?? ''; ?>">
                </label>
                <div id='gender-block'>
                    Gender:
                    <input type="radio" name='gender' value='Male' <?php if (!$girl) echo 'checked'; ?>>
                    <label>male</label>
                    <input type="radio" name='gender' value='Female' <?php if ($girl) echo 'checked'; ?>>
                    <label>female</label>
                </div>
                <div id='height-block'>
                    <label>Height in feet
                        <select name="heightFeet" >
                            <option value="1" <?php
                            if ($heightFt == '1') {
                                echo 'selected';
                            }
                            ?>>1</option>
                            <option value="2" <?php
                            echo checkSelectFt($heightFt, 2);
                            ?>>2</option>
                            <option value="3" <?php
                            echo checkSelectFt($heightFt, 3);
                            ?>>3</option>
                            <option value="4" <?php
                            echo checkSelectFt($heightFt, 4);
                            ?>>4</option>
                            <option value="5" <?php
                            echo checkSelectFt($heightFt, 5);
                            ?>>5</option>
                            <option value="6" <?php
                            echo checkSelectFt($heightFt, 6);
                            ?>>6</option>
                            <option value="7" <?php
                            echo checkSelectFt($heightFt, 7);
                            ?>>7</option>
                            <option value="8" <?php
                            echo checkSelectFt($heightFt, 8);
                            ?>>8</option>
                        </select>
                    </label
                    <label>Height in inches
                        <select name="heightInches" >
                            <option value="0" <?php
                            echo checkSelectInch($heightInches, 0);
                            ?>>0</option>
                            <option value="1" <?php
                            echo checkSelectInch($heightInches, 1);
                            ?>>1</option>
                            <option value="2" <?php
                            echo checkSelectInch($heightInches, 2);
                            ?>>2</option>
                            <option value="3" <?php
                            echo checkSelectInch($heightInches, 3);
                            ?>>3</option>
                            <option value="4" <?php
                            echo checkSelectInch($heightInches, 4);
                            ?>>4</option>
                            <option value="5" <?php
                            echo checkSelectInch($heightInches, 5);
                            ?>>5</option>
                            <option value="6"<?php
                            echo checkSelectInch($heightInches, 6);
                            ?>>6</option>
                            <option value="7" <?php
                            echo checkSelectInch($heightInches, 7);
                            ?>>7</option>
                            <option value="8" <?php
                            echo checkSelectInch($heightInches, 8);
                            ?>>8</option>
                            <option value="9" <?php
                            echo checkSelectInch($heightInches, 9);
                            ?>>9</option>
                            <option value="10" <?php
                            echo checkSelectInch($heightInches, 10);
                            ?>>10</option>
                            <option value="11" <?php
                            echo checkSelectInch($heightInches, 11);
                            ?>>11</option>
                        </select>
                    </label>
                </div>

                <div id='weight-block'>
                    <label>Weight in lbs.
                        <input type="number" name='weight' step='0.1' value='<?= $weight ?? '' ?>'>
                    </label>
                </div>
            </fieldset>
            <input type="submit" value='calculate' class='btn'>
        </form>

        <div id='results'>
            <?= $response ?? ''; ?>
        </div>
        <br>
        <footer>
            <hr>
            <div id="ftr">
                &COPY; <?php echo date("Y"); ?>  M. Bret Blackford
            </div>
        </footer>
    </body>

</html>
