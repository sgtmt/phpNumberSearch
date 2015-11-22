<?php
$atai=0;
while($d =trim(fgets(STDIN))){
 
for($i=1; $i<=$d; $i++){
    if(strstr($i, '77')){//求めたい値　参考値:77
        $atai+=2;
    }else{
     if (strstr($i, '7')) {//求めたい値　参考値:7
         $k++;
     }

    }

}


print $atai."\n";
$atai=0;
}


?>
