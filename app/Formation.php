<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formateur;
class Formation extends Model
{
    protected $guarded=['id'];
    public function formateurs()
    {
    	return $this->belongsToMany(Formateur::class);
    }

 }
