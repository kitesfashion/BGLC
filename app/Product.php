<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{	protected $table = 'products';
	protected $fillable = [
        'menuId','categoryId','name','firstHomeTitle','secondHomeTitle','firstInnerTitle','secondInnerTitle','firstHomeImage','firstInnerImage','homeDescription', 'innerDescription', 'urlLink','articleIcon','metaTitle','metaKeyword','metaDescription','orderBy','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function menu()
	{
    	return $this->belongsTo(Menu::class);
	}

}