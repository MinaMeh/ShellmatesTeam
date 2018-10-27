<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Departement extends Model
{
    protected $guarded=['id'];

    public function users(){
    	return $this->belongsToMany(User::class)->withPivot('poste');
    }

    public function chef(){
       	$members=$this->users;
       	foreach ($members as $member)
       	{
       		if ($member->pivot->poste=="chef département")
       			return $member;      
       	}
       	 	

    }
}
