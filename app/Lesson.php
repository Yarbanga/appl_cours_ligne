<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    
    protected $guarded = [];
    

    public function classes()
	{
		return $this->belongsToMany('App\Classe');
    } 
    public function matiere()
	{
		return $this->belongsTo('App\Matiere');
    } 
    
}
