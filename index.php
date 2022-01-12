
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first time learning php 11 januari 2022</title>
</head>
<body>
<?php


// How to create variable in PHP, operator, update variable and string concatenation, control flow, loop, array, function
$name = "Andesta Febrianto Nainggolan";

$tshirtSoap = 10000;
$soap = 3000;
$teethBruse = 20000;
$yourMoney = 100000;
$streetLight = "red";
$totalBelanja = $tshirtSoap + $soap + $teethBruse;
$kembalian = $totalBelanja - $yourMoney;
$discount = $totalBelanja * 0.1;

function calculateYourAge($bornDate) {
    $DateNow = 2022;
    $Age = $DateNow - $bornDate;
    return $Age;
}

echo calculateYourAge(1996)."<br>";
// Array
$firstArray = array("Budi","Dedi");
$secondArrayAssociative = array(
    "firstKey" => "valueOfFirstKey",
    "secKey" => 2,
);
$thirdArray = array("Wardiman","Triadndi");

echo $firstArray[1],  $secondArrayAssociative['secKey'];

    if($totalBelanja >= 50000) {
        echo "<h1> Total belanja: {$totalBelanja}</h1>";
        echo "<br>";
        echo "<h2> Selamat anda mendapatkan discount sebesar {$discount} </h2>";
        
    } else {
        echo "<h1> Total belanja : {$totalBelanja} </h1>";
        echo "<br>";
        echo "<h2> Maaf anda tidak mendapatkan discount </h2>";
    
    }

    switch($streetLight) {
        case "red": 
            echo "Harus berhenti";
            break;
        case "green":
            echo "Harus berjalan";
            break;
        default:
        echo "unknown";
        break;
    }

    for($i=0; $i < count($thirdArray); $i++) {
        echo "<br> {$thirdArray[$i]}";
    }


?> 

</body>
</html>
