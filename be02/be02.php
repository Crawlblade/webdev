<?php
    $numbers = array();
    foreach($_GET as $key => $val) {
        if ($key != 'sub') {
              if (! is_numeric($val)) {
                continue;
              }
            $numbers[] = (int)$val;
        }
    }

    echo '<h3>Assignment BE02, Kasper Kudsk</h3>';
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

    $highestValue = max ($numbers);
    $lowestValue = min ($numbers);
    echo '<p>The highest value of your entered numbers is:</p>';
    echo $highestValue;
    echo '<p>The lowest value of your entered numbers is</p>';
    echo $lowestValue;