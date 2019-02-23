<?php
// written by: M. Bret Blackford
// date: February 2019

require 'includes/validation-logic.php';
require 'calcBMI.php';
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

        <!--form method='POST' action='calcBMI.php' class='form'-->
        <form method='POST'  class='form' >
            <fieldset>
                <label class='line'>Name
                    <input type='text' name='name' value='<?= $form->get('name'); ?>'>

                </label>
                <label class='line'>Date of Birth
                    <input type="date" name='dob' value="<?= $form->get('dob'); ?>">
                </label>
                <div id='gender-block'>
                    Gender:
                    <input type="radio" name='gender' value='Male' <?php echo isChecked($form->get('gender'), "Male"); ?>>
                    <label>male</label>
                    <input type="radio" name='gender' value='Female' <?php echo isChecked($form->get('gender'), 'Female'); ?>>
                    <label>female</label>
                </div>
                <div id='height-block'>
                    <label>Height in feet
                        <select name="heightFeet" >
                            <option value="1" <?php echo isSelected($form->get('heightFeet'), '1'); ?>>1</option>
                            <option value="2" <?php echo isSelected($form->get('heightFeet'), '2'); ?>>2</option>
                            <option value="3" <?php echo isSelected($form->get('heightFeet'), '3'); ?>>3</option>
                            <option value="4" <?php echo isSelected($form->get('heightFeet'), '4'); ?>>4</option>
                            <option value="5" <?php echo isSelected($form->get('heightFeet'), '5'); ?>>5</option>
                            <option value="6" <?php echo isSelected($form->get('heightFeet'), '6'); ?> >6</option>
                            <option value="7" <?php echo isSelected($form->get('heightFeet'), '7'); ?>>7</option>
                            <option value="8" <?php echo isSelected($form->get('heightFeet'), '8'); ?>>8</option>
                        </select>
                    </label>
                    <label>Height in inches
                        <select name="heightInches" >
                            <option value="0" <?php
                            if ($form->get('heightInches') == '0') {
                                echo 'selected';
                            }
                            ?>>0</option>
                            <option value="1" <?php echo isSelected($form->get('heightInches'), '1'); ?>>1</option>
                            <option value="2" <?php echo isSelected($form->get('heightInches'), '2'); ?>>2</option>
                            <option value="3" <?php echo isSelected($form->get('heightInches'), '3'); ?>>3</option>
                            <option value="4" <?php echo isSelected($form->get('heightInches'), '4'); ?>>4</option>
                            <option value="5" <?php echo isSelected($form->get('heightInches'), '5'); ?>>5</option>
                            <option value="6" <?php echo isSelected($form->get('heightInches'), '6'); ?>>6</option>
                            <option value="7" <?php echo isSelected($form->get('heightInches'), '7'); ?>>7</option>
                            <option value="8" <?php echo isSelected($form->get('heightInches'), '8'); ?>>8</option>
                            <option value="9" <?php echo isSelected($form->get('heightInches'), '9'); ?>>9</option>
                            <option value="10"<?php echo isSelected($form->get('heightInches'), '10'); ?>>10</option>
                            <option value="11"<?php echo isSelected($form->get('heightInches'), '11'); ?>>11</option>
                        </select>
                    </label>
                </div>

                <div id='weight-block'>
                    <label>Weight in lbs.
                        <input type="number" name='weight' step='0.1' value='<?= $form->get('weight', '') ?>'>
                    </label>
                </div>
            </fieldset>
            <input type="submit" value='calculate' class='btn'>

            <?php
            $hasErrors = $form->hasErrors;
            if (isset($errors) && $errors):
                ?>
                <div id="alerts">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li class='alert-danger'><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            <?php endif; ?>

        </form>

        <?php if (!$form->hasErrors && $form->isSubmitted()) : ?>
            <div id="results">
                <?php echo calcBMI($form); ?>
                <?= $response ?? ''; ?>
            </div>
        <?php endif; ?>
        <br>
        <footer>
            <hr>
            <div id="ftr">
                &COPY; <?php echo date("Y"); ?>  M. Bret Blackford
            </div>
        </footer>
    </body>

</html>


