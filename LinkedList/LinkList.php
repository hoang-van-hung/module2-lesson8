<?php
include_once "Node.php";

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode=NULL;
        $this->lastNode= NULL;
        $this->count= 0;
    }

    public function inserFirst($data)
    {
        $link =new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == NULL)
            $this->lastNode =$link;

        $this->count++;
    }

    public function inserLast($data)
    {
        if ($this->firstNode != NULL) {
            $link =new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode =$link;
            $this->count++;
        }else {
            $this->inserFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData= array();
        $current = $this->firstNode;
        while ($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}