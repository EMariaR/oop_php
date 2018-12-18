<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 13.12.2018
 * Time: 10:28
 */

//See fail on tabelite tegemiseks kasutatav. Objekti kirjeldus.

class Tabel
{
    // klassi omadused
    var $tabel = array();
    var $rida = array();


    // klassi meetodid

    /**
     * Tabel constructor.
     */
    public function __construct()
    {
        echo 'Tabel tüüpi objekt on loodud<br>';
    }

    /**
     * @param $rida - massiiv rea elementidega
     */
    function lisaRida($rida) {
        $this->tabel[] = $rida;
    }


    /**
     * vaata tabel massiiv  foreach abil ridade kaupa ja väljasta iga rea sees olev element tühikuga eraldades
     * read eralda reavahetusega
     */
    function  naitaTabel() {
        foreach ($this->tabel as $rida) {
            foreach ($rida as $element) {
                echo $element.'&nbsp;' ;
            }
            echo  '<br>';
        }
    }
}