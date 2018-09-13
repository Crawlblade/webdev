<?php
    foreach($_GET as $key => $val) {
      if ($key != 'sub') {
            if (! is_numeric($val)) {
                header("Location: be01.html");
            }
            $$key = (int)$val;
            }
    }
    $highestValue = max ( $firstNumber , $secondNumber , $thirdNumber);
    print '<h3>Assignment BE01, Kasper Kudsk</h3>';
    print '<br>';
    print '<p>The highest value of your entered numbers is:</p>';
    print $highestValue;
    print '<br><p>Your numbers were:';
    print '<br>';
    print $firstNumber . '<br>' . $secondNumber . '<br>' . $thirdNumber;
