<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComponentModel extends Model
{
    //
    protected $connection = 'db_insurance';
    protected $table = 'component_maintain';
    public $timestamps = false;
}
