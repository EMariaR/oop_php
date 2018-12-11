<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 06.12.2018
 * Time: 11:08
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
            <title>'.$lehePealkiri.'</title>
        </head>
        <body>';
if($naitaSisu == true) {
    // sisu väljastamine
    echo '  <h1>' . $sisuPealkiri . '</h1>';
} else {
    if($naitaPeidetudInfo ==  true){
        echo 'See on peidetud info!';
    } else {
        echo 'Kõik on saladus!';
    }
}
// html lehe lõpp
echo '
        </body>
    </html>
';
?>