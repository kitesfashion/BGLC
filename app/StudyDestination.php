<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyDestination extends Model
{	protected $table = 'study_destination';
	protected $fillable = [
        'menuId','categoryId','parent_id','name','firstHomeTitle','secondHomeTitle','firstInnerTitle','secondInnerTitle','firstHomeImage','firstInnerImage','homeDescription', 'innerDescription', 'urlLink','articleIcon','metaTitle','metaKeyword','metaDescription','orderBy','buttonName','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function menu()
	{
    	return $this->belongsTo(Menu::class);
	}

}