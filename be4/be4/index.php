

<?php
/**
 * @author nml
 * example from textbook, Doyle, 2010
 */
    require_once './inc/Sellable.inc.php';
    require_once './inc/Golfball.inc.php';
    require_once './inc/Television.inc.php';
    require_once './inc/Tennisball.inc.php';
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
    $ball->setIndents(450);
    $ball->setColor('yellow');

    $tv = new Television();
    $tv->setScreenSize(42);
    
    $tenBall = new TennisBall();
    $tenBall->setColor('yellow');

    $manager = new StoreManager();
    $manager->addProduct($ball);
    $manager->addProduct($tv);
    $manager->addProduct($tenBall);
    $manager->stockUp();

    printf("<p>There are %s golfballs in stock. They have %s indents, and they are %s.</p>\n"
            , $ball->getStockLevel()
            , $ball->getIndents()
            , $ball->getColor());

    printf("<p>There are %s %s televisions in stock\n"
            , $tv->getStockLevel()
            , $tv->getScreenSize());

    printf("<p>There are %s %s tennisballs in stock\n"
            , $tenBall->getStockLevel()
            , $tenBall->getColor());
?>
        <form action="http://x15.dk/hitme.php" method="post">
            <table>
                <tr><td>Televisions</td>
                    <td>
                    <select name="tvs">
                        <option>42</option>
                        <option>52</option>
                        <option>58</option>
                    </select>
                </td>
                <td><input type="text" name="tvno"/></td></tr>
                <tr><td>Golf Balls</td>
                    <td>
                    <select name="gcolor">
                        <option>Lime</option>
                        <option>Yellow</option>
                        <option>Pink</option>
                        <option>White</option>
                    </select>
                </td>
                <td><input type="text" name="gno"/></td></tr>
                
                <tr><td>Tennisballs</td>
                    <td>
                    <select name="tcolor">
                        <option>Lime</option>
                        <option>Yellow</option>
                        <option>Pink</option>
                        <option>White</option>
                    </select>
                </td>
                <td><input type="text" name="tno"/></td></tr>
                
                <tr><td></td><td><input type="submit"/></td></tr>
            </table>
        </form>

        <?php
        



        ?>
    </body>
</html>