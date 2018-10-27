<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;
class Formateur extends Model
{
    protected $guarded=['id'];
    public function formations()
    {
    	return $this->belongsToMany(Formation::class);
    }
}
