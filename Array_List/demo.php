<?php
$arrone =[1,2,3,4];
$arrTwo =[5,6,7,8,9];
$arrThree=  [];
$arrThree= array_merge_recursive($arrone, $arrTwo);
echo "<pre>";
var_dump($arrThree);