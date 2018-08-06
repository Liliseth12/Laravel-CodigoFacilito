<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    protected $table = "images";

    protected $fillable = ['name', 'article_id'];

    public function article(){
    	return $this->belongsTo('App\Article');
    }
}
