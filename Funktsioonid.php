<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 13.12.2018
 * Time: 8:45
 */

/*
  function funktsiooniNimi($param1, $param2, ..., $paramN) {
  kõik tegevused, mis funktsiooni sees toimuvad, loogeliste sulgude vahel
  }
 */
/**
 * @param $ridadeArv
 * @param $veergudeArv
 */

// massiivid
//array()
/*
 $massiiv = array(); // tühi massiiv - ei ole sees midagi
$massiiv[] = väärtus;
 */
//massiivi loomine
$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
//massiivi sisu testkontroll
var_dump($numbrid);
echo '<pre>';
print_r($numbrid);
echo '</pre>';
//massiivi elemendi väljastamine
echo $numbrid[1][1];
echo '<br>';
//massiivi suuruse kontroll - ridade arv siin
$ridadeArv = count($numbrid);
echo $ridadeArv;
//veergude arv
$veergudeArv = count($numbrid[0]);
echo $veergudeArv;
echo '<br>';

// massiivi väljastamine for (alustame 0-st, siis viimane osa peab olema väiksem elementide arvust, seega < ilma =-ta)
for($reaNumber = 0; $reaNumber < $ridadeArv; $reaNumber++) {
    for ($veeruNumber =0; $veeruNumber < $veergudeArv; $veeruNumber++){
        echo $numbrid[$reaNumber][$veeruNumber].'&nbsp;';
    }
    echo '<br>';
}

// massiivi väljastamine foreachi abil
foreach ($numbrid as $rida) {
    foreach ($rida as $number) {
        echo $number.'&nbsp;';
    }
    echo '<br>';
}


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