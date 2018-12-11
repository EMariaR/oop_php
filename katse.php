<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 11.12.2018
 * Time: 9:22
 */

// muutujate defineerimine
// $muutujaNimi = väärtus;
$lehePealkiri = 'Katse leht';
$sisuPealkiri = 'Muutujate defineerimine';
// tingimuslaused
/*
 * if (tingimus == true) {
 *      siis toimub see osa
 * } else {
 *      muidu toimub see osa
 * }
 * */
$naitaSisu = false;
$naitaPeidetudInfo = false;
echo '
    <!doctype html>
    <html>
        <head>
            <title>Tsüklid</title>
        </head>
        <body>';
// tsüklid
// for
/*
for($juhtimisM=algvaartus; $ juhtimisM < lõppväärtus; $juhtimisM++) {
    tegevused, mis toimuvad nii kaua, kui $juhtimisM < lõppväärtus kehtib
}
*/
echo  '<table style="border: 1px solid black; bprder-collapse: collapse; width: 300px;">';
$ridadeArv = 4;
$veergudeArv = 5;
for ($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++) {
    echo '<tr style="border: 1px solid black;">';
    for ($veergudeArv = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
    echo '<td style="text-align: center">';
    echo $reaNumber;
    echo '</td>'
        }
    echo '</tr>';    
}
echo  '</table>';
echo '</body></html>';
?>