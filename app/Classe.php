<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
     
    protected $fillable = [
        'classe'
    ];

    public function users()
	{
		return $this->hasMany('App\User');
	} 

    public function lessons()
	{
		return $this->belongsToMany('App\Lesson');
	} 

	public function matieres()
	{
		return $this->hasMany('App\Matiere');
	} 

}
