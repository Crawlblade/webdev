<?php

    session_start();
    require_once './inc/Television.inc.php';
    require_once './inc/TelevisionI.inc.php';
    require_once './inc/TelevisionRC.inc.php';
    require_once './inc/TelevisionV1.inc.php';

?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'/>
        <title>Television</title>
        <link rel="stylesheet" href="./css/styles.css"/>
    </head>
    <body>
<?php
    $model = new Television();
    $rc = new TelevisionRC($model);
    $view1 = new TelevisionV1($model);
    if (isset($_POST)) {
        $rc->action($_POST);
    }
    printf("%s\n", $view1->osd());
    printf("%s\n", $view1->remote());
?>
    </body>
</html>