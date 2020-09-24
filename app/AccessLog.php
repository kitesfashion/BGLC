<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{   protected $table = 'access_log';
    protected $fillable = [
        'user_id','comapny_id','acess_id','count','history','action',
    ];

    protected $hidden = [
        'created_at','updated_at',
        //'created_by'=> Auth::user()->name,
        //'modified_by' => Auth::user()->name,
    ];
}
