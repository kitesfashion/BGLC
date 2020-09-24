<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    protected $table = 'upazilas';
    protected $fillable = [
        'name','bn_name',
    ];

     protected $hidden = [
        'created_at', 'updated_at',
    ];


}