<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scholarship extends Model
{
    protected $table = 'scholarship';

	protected $fillable = [
        'categoryId','name','image','description','orderBy','status','metaTitle','metaKeyword','metaDescription'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];   
}
