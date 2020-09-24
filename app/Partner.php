<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{	protected $table = 'partners';

	protected $fillable = [
        'name','information','image','description','orderBy','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
