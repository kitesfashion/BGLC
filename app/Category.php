<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'categories';

	protected $fillable = [
        'name','destinationId','orderBy','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];   
}
