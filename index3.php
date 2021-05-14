<?php
    function sum(...$num){
        $result=0;
        foreach($num as $x){
            $result+=$x;
        }
        return $result;
    }
    echo $totalF= sum(2,3). "\n";
    echo $totalS= sum(2,3,4). "\n";
    echo $totalT= sum(2,3,4,5). "\n";
?>