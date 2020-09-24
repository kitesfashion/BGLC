<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{	protected $table = 'customers';

	protected $fillable = [
        'name','information','image','description','orderBy','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
