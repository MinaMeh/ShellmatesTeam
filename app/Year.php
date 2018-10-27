<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Formation;
use App\Evenement;
class Year extends Model
{
       protected $guarded=['id'];
       public function users(){
       		return $this->belongsToMany(User::class);
       }
       public function formations(){
       		return $this->hasMany(Formation::class);
       }
       public function evenenements(){
       		return $this->hasMany(Evenement::class);
       }
       public function president(){
       	$member=$this->belongsToMany(User::class)->where('post','Président(e)')->first();       	
       		return $member;
       }
       public function vice(){
       	$member=$this->belongsToMany(User::class)->where('post','Vice-président(e)')->first();       	
       		return $member;
       }
       public function nbr_membres(){
       	return $this->users->count();
       }
}
