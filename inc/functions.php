<body>

<?php 

function newCalc($x) {
    $newnr = $x * 0.75;
    echo "Here is 75% of the number you inputed: " . $newnr;
}

$x = 100;
newCalc($x);

echo "<br>";

$a = 10;
newCalc($a);

function multiMachine($x) {

    $ten = $x * 10;
    $twenty = $x * 20;
    $thirty = $x * 30;
    $fourty = $x * 40;
    $fifty = $x * 50;

    echo "Here is your number times 10:" . $ten;
    echo "<br>";
    echo "Here is your number times 20:" . $twenty;
    echo "<br>";
    echo "Here is your number times 30:" . $thirty;
    echo "<br>";
    echo "Here is your number times 40:" . $fourty;
    echo "<br>";
    echo "Here is your nubmer times 50" . $fifty;
}
echo "<br>";
echo "<br>";
multiMachine($x);
?>

</body>