<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 13.12.2018
 * Time: 10:43
 */
// tõin sisse Tabel.php faili sisu - tuleb märkida faili asukoht ja nimi
require_once './Tabel.php';
require_once './HTMLtabel.php';
// loome tabeli objekti
$lihtTabel = new Tabel();

// lisame read sisuga
$lihtTabel->lisaRida(array(1, 2, 3));
$lihtTabel->lisaRida(array(4, 5, 6));
$lihtTabel->lisaRida(array(7, 8, 9));
//väljastame tabeli
$lihtTabel->naitaTabel();
echo  '<hr>';

//loon HTMLtabel objekti
$htmlTabel = new HTMLtabel();
//lisan read
$htmlTabel->lisaRida(array(1, 2, 3));
$htmlTabel->lisaRida(array(4, 5, 6));
$htmlTabel->lisaRida(array(7, 8, 9));
// väljastame tabeli
$htmlTabel->naitaTabel();
