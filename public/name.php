<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/3
     * Time: 14:31
     */
    namespace haha;
    require_once './1.php';
    
    class Person{
        function __construct()
        {
            echo 'I am person in test!';
        }
    }
    //new \one\Person();

    //new Person();

    function getMoney() {
        $rmb = 1;
        $dollar = 6;
        $func = function() use ( $rmb, $dollar ) {
            $product = $rmb + $dollar;
            return $product;
        };
        return $func;
    }

    $test = getMoney();
    $test();


    /*function getMoneyFunc() {
        $rmb = 1;
        $func = function() use ( &$rmb ) {
            echo $rmb;
            //把$rmb的值加1
            $rmb++;
        };
        return $func;
    }

    $getMoney = getMoneyFunc();
    $getMoney();
    $getMoney();
    $getMoney();*/
