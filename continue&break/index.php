<?php
//Continue and break between loops

/*for($i=20; $i<50; $i++){
    if($i%13==0){
    echo $i;
    echo PHP_EOL;
    break;
   
}
}*/


for($i=20; $i<40; $i++){
    if($i<25){
    
   continue;
   
}
echo $i;
    echo PHP_EOL;
}
?>