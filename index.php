<!DOCTYPE html>
<html>

<head>
    <title>Temperature Conversion</title>
<!--    Link to CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="./style.css">
<!--    Link to Indie Flower google font-->
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
</head>
<body>
<!--#Graded provides a background which transitions from cold blue to hot red. This was customised and generated using CSSmatic.com-->
<div id="graded">
<!--    PHP code to generate Farneheit to Celsius programme. -->
<center><?php
$F = 0;
$C = ($F-32)*5/9;
for ($F = 0; $F <=32; $F++)
{
    $C = ($F-32)*5/9;
    echo nl2br("$F &deg; F is $C &deg; C, which is below freezing\n");
}
    for ($F = 33; $F <=59; $F++)
    {
        $C = ($F-32)*5/9;
        echo nl2br("$F &deg; F is $C &deg; C, which is below seriously cold\n");
    }
    for ($F = 60; $F <=100; $F++)
    {
        $C = ($F-32)*5/9;
        echo nl2br("$F &deg; F is $C &deg; C, which is far more pleasant\n");
    }
    for ($F = 101; $F <200; $F++) {
        $C = ($F - 32) * 5 / 9;
        echo nl2br("$F &deg; F is $C &deg; C, which is INSANELY hot\n");
    }
?></center>
</body>
</html>
</div>
</body>
</html>