

<?php
/**
 * @author nml
 * example from textbook, Doyle, 2010
 */
    require_once './inc/Sellable.inc.php';
    require_once './inc/Golfball.inc.php';
    require_once './inc/StoreManager.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testing Interface, OO PHP</title>
    </head>
    <body>
<?php
    $ball = new Golfball();
    $ball->setIndents('They all have indents');
    $ball->setColor('blue');
    $manager = new StoreManager();
    $manager->addProduct($ball);
    $manager->stockUp();
    
    printf("<p>There are %s golfballs in stock. %s, and they are %s.</p>\n"
            , $ball->getStockLevel()
            , $ball->getIndents()
            , $ball->getColor());

    print("<p>Selling two golfballs...</p>\n");
    $ball->sellItem();
    $ball->sellItem();
    
    printf("<p>There are now %s golfballs in stock. </p>\n"
            , $ball->getStockLevel());
?>
    </body>
</html>