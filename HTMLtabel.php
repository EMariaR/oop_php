<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 13.12.2018
 * Time: 11:03
 */
require_once './Tabel.php';
class HTMLtabel extends Tabel
{

    /**
     * HTMLtabel constructor.
     */
    public function __construct()
    {
        echo 'HTML';
        parent::__construct();
    }

    /**
     * vaata tabel massiiv  foreach abil ridade kaupa ja väljasta HTML tabeli kujul
     */
    function naitaTabel()
    {
        echo '<table border="1">';
        foreach ($this->tabel as $rida) {
            echo '<tr>';
            foreach ($rida as $element) {
                echo '<td>'.$element.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

}