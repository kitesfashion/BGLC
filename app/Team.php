<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    protected $table = 'teams';

	protected $fillable = [
        'teamCategory','name','email','phone','designation','image','description','facebook','twiteer','linkedin','instagram','skype','google_plus','orderBy','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];   
}
