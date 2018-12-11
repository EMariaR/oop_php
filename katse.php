<?php
/**
// * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 06.12.2018
 * Time: 11:08
 */
// muutujate defineerimine
// $muutujaNimi = väärtus;
$lehePealkiri = 'Katseleht*;
$sisuPealkiri = 'Muutujate defineerimine';
// muutujate sisu testvaatamine
var_($lehePealkiri);
echo '<br>;
var_dump($sisuPealkiri);
//andmetüübid
$täisarv = 7;
$reaalarv = -2.6;
$tekst = 'Tere PHP';
$tõeväärtusTrue = true;
$tõeväärtusFalse = false;
//väärtuse tüübi kontroll - gettype($muutujaNimi)
//väärtuse tüübi teisendus - settype($muutujaNimi, 'tüüp')
//väljastamine
//ühendamine 'tekst katkeb'.$muutujaNimi.' tekst jätkub'
echo  '
   <!doctype html>
   <html>
      <head>
          <title>'.lehePealkiri.''</title>
      </head>
        <body>
           <h1>'.sisuPealkiri.'</h1>
<h3>Andmetüübid</h3>
<ul>
   <li>$täisarv = '.$täisarv.'</li>
   <li>$reaalarv = '.$reaalarv.'</li>
   <li>$tekst = '.@tekst.'</li>
   <li>$tõeväärtusTrue = '.$tõeväärtusTrue.'</li>
   <li>$tõeväärtusFalse = '.$tõeväärtusFalse.'</li>
</ul>
        </body>
    </html>
';
?>