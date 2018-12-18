<?php
/**
 * Created by PhpStorm.
 * User: elo-maria.roots
 * Date: 18.12.2018
 * Time: 8:44
 */

function suguVarv($sugu) {
    if($sugu == 'naine') {
        echo '<div style="color: red">';
    } else {
        echo '<div style="color: blue">';
    }
}

function valjastaInfo($massiiv) {
    foreach ($massiiv as $alammassiivNimi => $alamMassiivAndmed) {
         suguVarv($alamMassiivAndmed['sugu']);
         echo '<h5>'.$alammassiivNimi.'</h5><br>';
            foreach ($alamMassiivAndmed as $elemendiNimi => $elemendiVaartus) {
                suguVarv($alamMassiivAndmed['sugu']);
                echo $elemendiNimi.'- '.$elemendiVaartus.'</divr>';
    }
    echo  '<hr>';
    }
}

function  suguVordlus($porsas1, $porsas2) {
    if ($porsas1['sugu'] == $porsas2['sugu']) {
        return 0; }
    return ($porsas1['sugu'] < $porsas2['sugu']) ? -1 : 1;
}

function sortSooJargi($perekond) {
        uasort($perekond, 'suguVordlus');
}

//sidestatud massiivi kasutamine. koosneb nimest ja väärtusest, mõlemad elemendid peab tööle panema. Millised andmed lähevad mille juurde.
$perekondPeppa = array (
 'Peppa' => array (
    'nimi' => 'Peppa',
    'amet' => 'põrsaslaps',
    'vanus' => 5,
    'sugu' => 'naine'
),
'George' => array(
    'nimi' => 'George',
    'amet' => 'põrsaslaps',
    'vanus' => 2,
    'sugu' => 'mees'
),
'Ema' => array(
    'Põrsas Ema' => array(
        'nimi' => 'Ema Põrsas',
        'amet' => 'põrsasema',
        'vanus' => 35,
        'sugu' => 'mees'
),
'Isa' => array(
    'Põrsas Isa' => array(
    'nimi' => 'Isa Põrsas',
    'amet' => 'porsasisa',
    'vanus' => 40,
    'sugu' => 'mees'
    )
)
);

//sort($perekondPeppa);
//asort($perekondPeppa);
//ksort($perekondPeppa);
//usort($perekond, 'suguVordlus');

//lehe sisu
echo '<!doctype html><html><head>
<title>Massiivid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';
valjastaInfo($porsasPeppa);
valjastaInfo($porsasGeorge);

echo '</body></html>';