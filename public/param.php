<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/5
     * Time: 15:54
     */
    
class test
{
    public $test = '';
    function __construct($input = '')
    {
        $this->test = $input;
    }
    function getTest()
    {
        return $this->test;
    }
}

$a = new test('a test');
echo $a->getTest();//将输出 a test
$b = new test();
echo $b->getTest();
