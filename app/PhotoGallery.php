<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotoGallery extends Model
{
    protected $table = 'photo_galleries';

	protected $fillable = [
        'category_id','title','image','description','orderBy','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];   
}
