<?php

function evenorodd($n){
    if($n%2==0){
        return true;
    }
    else{
        return false;
    }
}

function factorial($n){
    $result=1;
    for($i=$n; $i>1; $i--){
        $result *=$i;
    }
    return $result;
}
?>