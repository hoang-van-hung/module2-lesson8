<?php
include_once "MyList.php";
$arr=[1,2,3,4];
$mylist =new MyList();
$mylist->add(12);
$mylist->add(20);
$mylist->add(40);
$mylist->add(35);
echo "<pre>";
 $mylist->insert(0,5);
 $mylist->remove(2);
$mylist->get(2);
$mylist->addAll($arr);
//$mylist->isEmpty();
$new =new MyList();
$new->addAll($arr);
echo "<pre>";
var_dump($mylist);