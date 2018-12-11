<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 11.12.2018
 * Time: 9:22
 */

// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/

$minuNimi = 'Elo-Maria Roots';
$kursuseTähis = 'KD';
$kursuseNumber = '18';
$kooliEmail = 'elo-maria.roots@khk.ee';

// muutujate sisu testvaatamine
var_dump($minuNimi);
echo '<br>';
var_dump($kursuseTähis);
echo '<br>';
var_dump($kursuseNumber);
echo '<br>';
var_dump($kooliEmail);

// andmetüübid
$taisarv = 7;
$reaalarv = -2.6;
$tekst = 'Tere PHP';
$toevaartusTrue = true;
$toevaartusFalse = false;

// väärtuse tüübi kontroll - gettype($muutujaNimi)
// väärtuse tüübi teisendus - settype($muutujaNimi, 'tüüp')
// väljastamine
// ühendamine 'tekst katkeb '.$muutujaNimi.' tekst jätkub'
echo '
    <!doctype html>
    <html>
        <head>
            <title>'.$minuNimi.'</title>
        </head>
        <body>
            <h1>'.$kursuseTähis.'</h1>
            <h3>'.$kursuseTähis.'</h3>
            <h3>'.$kooliEmail.'</h3>
            ';