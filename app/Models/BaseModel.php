<?php
    /**
     * Created by PhpStorm.
     * User: rachel.ran
     * Date: 2018/11/3
     * Time: 17:11
     */
    
    namespace App\Models;
    
    
    class BaseModel extends AppModel
    {
        protected $connection = 'db_insurance';
    }