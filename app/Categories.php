<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'CATEGORY_ID';
    public $incrementing = false;
    protected $keyType = 'char';
    protected $connection = 'db_laravel3';
}
