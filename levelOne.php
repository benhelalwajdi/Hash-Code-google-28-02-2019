<?php

$handle = fopen("a_example.txt", "r");
if ($handle) {
    $list = array();
    $array[] = $var;
    $res = "";
    $diapo = 0 ;
    $v = 0 ;
    $l = 0;
    $v1 = -1;
    $l2 = 0;
    while (($line = fgets($handle)) !== false) {
        $i = 0;
        while ($i < strlen($line)){
            if ($i == (strlen($line)-1)){
                //echo $line."\n";
                $order = $order . $line;
            }
          //  echo $line."\n";
            if($line[$i] == "H") {
                   // $order= $order."\n";
                    $diapo = $diapo + 1;
                    $res = $res.(string)($l2-1)."\n";
                }
                if($line[$i] == "V") {
                  //  $order= $order."\n";
                    $v =$v + 1;
                    if (($v == 2)&&($v1 >= 0 )) {
                        $res = $res.(string)$v1.(string)($l2-1)."\n";
                        $diapo = $diapo + 1;
                        $v1 = 0 ;
                        $v = 0 ;
                    }else {
                        $v1 = ($l2-1)." " ;
                    }
                }
               $i = $i+1;
        }

        $l = $l+1;
        $l2 = $l2+1;
    }

    //echo $order;
   var_dump($diapo);

$file = 'p.txt';
// Ouvre un fichier pour lire un contenu existant
$current = file_get_contents($file);
// Ajoute une personne
$current .= $diapo."\n";
$current .= "\n".$res;
// Écrit le résultat dans le fichier
file_put_contents($file, $current);

    fclose($handle);
} else {
}
