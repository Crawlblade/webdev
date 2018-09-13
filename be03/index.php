
<!doctype html>
<html>
<head>
    <meta charset='utf-8'/>
    <style>
        h3 {
            margin-bottom: 0;
        }
        .spacer {
            margin-bottom: 1em;
        }
    </style>
    <script src='triangles.js'></script>
</head>
<body>
<h3>Triangular Code</h3>
<div class='spacer' id='realestate'></div>
<?php
if (isset($_POST['subm'])) {
    foreach ($_POST as $key => $val) {
        $$key = $val;
    }
    printf("D: (%s,%s)<br/>\n", $x1, $y1);
    printf("E: (%s,%s)<br/>\n", $x2, $y2);
    printf("F: (%s,%s)<br/>\n", $x3, $y3);

    // given coordinate sets xn,yn you must
    // calculate and print the angles in degrees
    // and the area of the triangle in this div

    // your code goes here
    //  |DE| = √(  (Ax - Bx)2 + (Ay - By)2 )

    $sideDE = sqrt((pow(($x1 - $x2),2)) + (pow(($y1 - $y2),2))); //pow (x,y); er funktionen for potens (x = base, y = eksponenten)
    $sideEF = sqrt((pow(($x2 - $x3),2)) + (pow(($y2 - $y3), 2)));
    $sideDF = sqrt((pow(($x1 - $x3), 2))+ (pow(($y1 - $y3), 2)));

    //  cos(A)=b2+c2−a2 / 2bc
    $vinkelDCos = (pow($sideDF, 2) + (pow($sideEF, 2) - (pow($sideDE, 2)))) / (2 * $sideEF * $sideDF);
    $vinkelD = rad2deg(acos($vinkelDCos));

    // cos(B)=a2+c2−b2 / 2ac
    $vinkelECos = (pow($sideDE, 2) + (pow($sideEF, 2) - (pow($sideDF, 2)))) / (2 * $sideDE * $sideEF);
    $vinkelE = rad2deg(acos($vinkelECos));

    //cos(C)=a2+b2−c2 / 2ab
    $vinkelFCos = (pow($sideDE, 2) + (pow($sideDF, 2) - (pow($sideEF, 2)))) / (2 * $sideDE * $sideDF);
    $vinkelF = rad2deg(acos($vinkelFCos));

    // Heron's Formel
    $semiPerimeter = 0.5*($sideDE + $sideDF + $sideEF);
    $trekantAreal = sqrt($semiPerimeter*($semiPerimeter - $sideDF)*($semiPerimeter - $sideDE) * ($semiPerimeter - $sideEF));

    echo "<br>";
    echo "Side DE = " . $sideDE;
    echo "<br>";
    echo "Side EF = " . $sideEF;
    echo "<br>";
    echo "Side DF = " . $sideDF;
    echo "<br>";
    echo "Vinkel D = " . $vinkelD . "&deg";
    echo "<br>";
    echo "Vinkel E = " . $vinkelE . "&deg";
    echo "<br>";
    echo "Vinkel F = " . $vinkelF . "&deg";
    echo "<br>";
    echo "Trekantens areal er " . $trekantAreal;

    printf("<script>drawTriangle('realestate', %s, %s, %s, %s, %s, %s);</script>\n",
        $x1, $y1, $x2, $y2, $x3, $y3);
}
?>
<div class='spacer'></div>
<form method="post"
      action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
        <tr>
            <td>x1</td><td>y1</td><td>x2</td><td>y2</td><td>x3</td><td>y3</td>
        </tr>
        <tr>
            <td><input type='text' name='x1' size='4'/></td>
            <td><input type='text' name='y1' size='4'/></td>
            <td><input type='text' name='x2' size='4'/></td>
            <td><input type='text' name='y2' size='4'/></td>
            <td><input type='text' name='x3' size='4'/></td>
            <td><input type='text' name='y3' size='4'/></td>
            <td><input type='submit' name='subm' value='Go!'/></td>
        </tr>
    </table>
</form>
</body>
</html>