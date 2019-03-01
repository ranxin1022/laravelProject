<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/28
     * Time: 10:39
     */
    
    namespace App\Http\Controllers;
    
    
    use Illuminate\Support\Facades\Facade;

    class FacadeController extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'hello';
        }
    
        public static function hello()
        {
            echo "hello world!";
        }
    }