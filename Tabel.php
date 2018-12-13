<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 13.12.2018
 * Time: 10:28
 */

class Tabel
{
    // klassi omadused
    var $tabel = array();
    var $rida = array();

    // klassi meetodid

    /**
     * @param $rida - massiiv rea elementidega
     */
    function lisaRida($rida) {
        $this->tabel[] = $rida;
    }


    /**
     *vaata tabel massiiv  foreach abil ridade kaupa
     */
    function  naitaTabel() {
        foreach ($this->tabel as $rida) {
            foreach ($rida as $element) {
                echo $element.'<&nbsp;' ;
            }
            echo  '<br>';
        }
    }
}