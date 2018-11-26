<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/5
     * Time: 11:30
     */
    
    function functionWithParameters($param1, $param2){
    
    }
    
    $reflectionFunction = new ReflectionFunction('functionWithParameters');
    
    $name = $reflectionFunction->getName(); // functionWithParameters
    
    $parameters = $reflectionFunction->getParameters();

    echo "name: " . $name . "\n";
    echo "<pre>";print_r($parameters);echo "<pre>";
    var_dump($parameters);