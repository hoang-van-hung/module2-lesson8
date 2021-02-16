<?php
include_once "LinkList.php";

$linkedList =new LinkList();

$linkedList->inserFirst(11);
$linkedList->inserFirst(22);
$linkedList->inserLast(33);
$linkedList->inserLast(44);

$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

/*echo $totalNodes."<br>";
echo implode('-',$linkData);*/
