<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 11.12.2018
 * Time: 10:37
 */

echo '<html><head><title>Ülesanded</title></head><body>';
// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/
echo '<h4>Ülesanne 1</h4>';
$eesNimi = 'Elo-Maria';
$pereNimi = 'Roots';
$osakond = 'IKT';
$email = 'elo-maria.roots@khk.ee';
echo 'Eesnimi '.$eesNimi.'<br>';
echo 'Perenimi '.$pereNimi.'<br>';
echo 'Osakond '.$osakond.'<br>';
echo 'email '.$email.'<br>';
echo '<hr>';

// Ülesanne 2
/* Loo muutuja nimega varv, mille algväärtuseks pane 'punane';
Koosta if-else if- else lause, mis väljastab teksti "Värviline tekst"
vastavalt määratud väärtusega. Katseta vähemalt kolme HTML värviga -
red, blue, orange - vastavalt tingimuslauses määra punane, sinine ja orange
*/
echo '<h4>Ülesanne 2</h4>';
$varv = 'roheline';
if($varv == 'punane'){
    echo '<p style="color: red;">Värviline tekst</p>';
} else if($varv == 'sinine'){
    echo '<p style="color: blue;">Värviline tekst</p>';
} else if($varv == 'orange'){
    echo '<p style="color: orange;">Värviline tekst</p>';
} else {
    echo '<p>Värviline tekst</p>';
}

echo  '<table style="border: 1px solid black; bprder-collapse: collapse; width: 300px;">';
$ridadeArv = 4;
$veergudeArv = 5;
for ($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++) {
    echo '<tr style="border: 1px solid black;">';
    for ($veergudeArv = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        $varv = '#'.$reaNumber.$veeruNumber.$reaNumber.$veeruNumber;
        echo '<td style="text-align: center">';
        echo $reaNumber;
        echo '</td>';
        }
    echo '</tr>';
}
echo  '</table>';
echo '</body></html>';
