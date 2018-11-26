<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/3
     * Time: 13:57
     */

    //use \haha\Person;
    
    function sum($carry, $item)
    {
        $carry += $item;
        return $carry;
    }
/*    $res = array_reduce($arr, function($carry, $item){
        return function() use ($item){//这里只use了item
            return strtolower($item) . '-';
        };
    });*/
    
    $a = array(1, 2,3, 4, 5);
    //echo array_reduce($a, "sum", 1);
    //print_r(get_declared_classes());
    //$person = new Person();
    function callback($callback) {
        $callback();
    }
    $msg = "Hello, everyone";
    $callback = function () use (&$msg) {
        print "This is a closure use string value, msg is: $msg. <br />/n";
    };
    $msg = "Hello, everybody";
    //callback($callback);
    //$callback();
    $callback($callback);
    