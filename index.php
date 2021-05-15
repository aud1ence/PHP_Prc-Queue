<?php

include_once "Queue.php";
include_once "Node.php";

$test = new Queue();
$test->enqueue("test");
$test->enqueue("test1");
$test->enqueue("test2");
$test->enqueue("test3");
$test->enqueue("test4");
$test->enqueue("test5");
$test->enqueue("test6");
$test->enqueue("end");
while (!$test->isEmpty()) {
    echo $test->dequeue() . "\n";
}