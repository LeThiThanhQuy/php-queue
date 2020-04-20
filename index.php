<?php
include "Queue.php";
include "Node.php";

$newQueue = new Queue();
$newNode = new Node();

if ($newQueue->isEmpty()){
    echo "It's Empty!<br>";
}else{
    echo "It's not Empty!<br>";
};
$newQueue->enqueue("num1");
$newQueue->enqueue("num2");
$newQueue->enqueue("num3");

$newQueue->dequeue();
$newQueue->dequeue();

if ($newQueue->isEmpty()){
    echo "It's Empty!<br>";
}else{
    echo "It's not Empty!<br>";
};

$newQueue->enqueue("add1");
$newQueue->enqueue("add2");

$newQueue->dequeue();
$newQueue->dequeue();
$newQueue->dequeue();

if ($newQueue->isEmpty()){
    echo "It's Empty!<br>";
}else{
    echo "It's not Empty!<br>";
};

echo $newNode->readNode();