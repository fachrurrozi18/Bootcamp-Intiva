<?php

// for ($i=1; $i <=11 ; $i++) { 
//     $data = $i * 2;
//     echo "$data ";
// }

// for ($i=10; $i >=1 ; $i--) { 
//     $data = $i * 2;
//     echo "$data ";
// }

for ($i=1; $i<=10; $i++) { 
    for($j=1; $j<=$i; $j++){
        $angka = $i*$j;
        echo "$angka ";
    }
    echo "<br>";
}

?>