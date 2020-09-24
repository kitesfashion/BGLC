<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = [
        'name','bn_name',
    ];
    
     protected $hidden = [
        'created_at', 'updated_at',
    ];


}