<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    // protected $guarded = [];
    protected $fillable = [
        'matiere', 'classe_id'
    ];

    public function classe()
	{
		return $this->belongsTo('App\Classe');
    } 
    public function lessons()
	{
		return $this->hasMany('App\Lesson');
	} 
}
