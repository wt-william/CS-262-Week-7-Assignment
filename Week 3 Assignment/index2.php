<?php 
    $arr = array(2, 3, 4, 6, 7, 9, 11, 20);
    $evenNum= var_dump(array_filter($arr,fn($arr)=>$arr%2===0));
    echo $evenNum;
?>
