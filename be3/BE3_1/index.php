<?php
    require_once './inc/Product.inc.php';
    require_once './inc/LiveLecture.inc.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
    $ll = new LiveLecture('Lecture'
            , '@Adactio at AEA'
            , '1 h 5 m'
            , 'Jeremy Keith'
            , 'Web Design Principles');
    $ll->display();
?>
    </body>
</html>

