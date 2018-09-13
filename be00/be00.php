<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    print ("Assignment BE00, Kasper Kudsk <br><br>");
    for ($i=0; $i<10; $i++){
        for($j=0; $j<10; $j++){
            if($i==$j){
                $x[$i][$j]=1;
            }
            else{
                $x[$i][$j]=0;
            }
            print ($x[$i][$j].' ');
        }
        print ("<br>");
    }
?>
</body>
</html>
