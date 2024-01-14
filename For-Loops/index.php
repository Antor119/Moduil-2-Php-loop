<?php
//Multiple Stepping in For Loops
/*for($i=10, $j=0; $i>0; $i--,$j++){
    echo $i.":".$j;
    echo PHP_EOL;
}*/

for($i=0; $i<=100; $i++){
    if($i%7==0){
        echo $i."\n";
    }
    if($i%11==0){
        echo $i."\n";
    }
}

?>