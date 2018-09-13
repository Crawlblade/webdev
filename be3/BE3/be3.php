<?php
    include_once './inc/Vehicle.inc.php';
    include_once './inc/Car.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inheritance</title>
    </head>
    <body>
        <?php
            $v1 = new Vehicle('Suzuki', 'Silver', 'Alice');
            printf("<p>%s</p>\n", $v1);
    
            $v2 = new Car('Tesla', 'Black', 'Batman', 4, TRUE);
            printf("<p>%s</p>\n", $v2);
        ?>
    </body>
</html>