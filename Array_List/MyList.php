<?php
 class MyList
 {
     public $array;
     public function MyList($arr = [])
     {
         if (is_array($arr) == true)
             $this->array = $arr;
         else
             $this->array= array();
     }

     function insert($index ,$obj)
     {
        $this->array[$index] = $obj;
     }

     function add($obj)
     {

       return array_push($this->array ,$obj);
     }

     function remove($index)
     {
         array_splice($this->array, $index,1);
     }

     function get($index)
     {
         return $this->array[$index];
     }

     function clear()
     {
         $this->array =[];
     }
     function addAll($arr)
     {
         array_merge_recursive($this->array, $arr);
     }
     function indexOf($obj)
     {

     }
     function isEmpty()
     {
         $length =count($this->array);
         if ($length > 0){
             echo "Array is not Empty";
         }else {
             echo "Array is Empty";
         }
     }
     function sortArray()
     {
         return sort($this->array);
     }

     function size()
     {
         return count($this->array);
     }


 }