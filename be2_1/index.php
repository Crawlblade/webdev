<?php
    require_once 'dbparams.inc.php';
    require_once 'dbconnect.inc.php';
    $title = 'Read and Display Cities, IBA WebDev';
    $lo = isset($_GET['lo']) ? $_GET['lo'] : 'A';
    $hi = isset($_GET['hi']) ? $_GET['hi'] : 'F';
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>BE.2.1</title>
    </head>
    <body>
        <header>
            <?php echo 'Assignment BE.2.1 ' . 'af ' . 'Mathias Ravn-Nielsen' . '<br><br>';?>
            <h1>DB Connection</h1>
            <h2>Country, Language & Population</h2>
        </header>

        <main>
        <!-- more html goes here -->
<?php
            $sql = "select name, language, population";
            $sql .= " from country, countrylanguage";
            $sql .= " where name between :lo and :hi";
            try {
                $q = $dbh->prepare($sql);
                $q->bindValue(':lo', $lo);
                $q->bindValue(':hi', $hi);
                $q->execute();
                print("<table>\n");
                while ($row = $q->fetch()) {
                    printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", 
                           $row['name'], $row['language'],
                            number_format($row['population']));
                }
                print("</table>\n");
            } catch(PDOException $e) {
                printf("<p>%s</p>\n", $e->getMessage());
            }
?>
        </main>
    </body>
</html>
