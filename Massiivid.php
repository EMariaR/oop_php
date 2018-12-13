<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 13.12.2018
 * Time: 9:21
 */

// massiivid
//array()
/*
 $massiiv = array(); // tühi massiiv - ei ole sees midagi
$massiiv[] = väärtus;
 */

$nimed = array();
var_dump($nimed);
$nimed[] = 'Elo';
$nimed[] = 'Helen';
var_dump($nimed);
echo '<pre>';
print_r($nimed);
echo '</pre>';


function htmlTable($ridadeArv = 0, $veergudeArv = 0) {
    echo '<table>';
    for($reaNumber =1; $reaNumber <= $ridadeArv; $reaNumber++) {
        echo '<tr>';
        for ($veeruNumber =1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            echo '<td>';
            echo $veeruNumber;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

// lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';
// kutsume funktsioon tööle
htmlTable(4, 4);
echo '<hr>';
htmlTable(2, 5);
echo '</body></html>';
?>