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
function htmlTable($ridadeArv = 0, $veergudeArv = 0) {
    echo '<table>';
    for($reaNumber =1; $reaNumber <= $ridadeArv; $reaNumber++) {
        echo '<td>';
          for ($veeruNumber =1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
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
htmlTabel(4, 4);
echo '<hr>';
htmlTabel(2, 5);
echo '</body></html>';
?>