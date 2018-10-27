<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Year;
class Evenement extends Model
{
     protected $guarded=['id'];
     public function year()
     {
     	return $this->belongsTo(Year::class);
     }

}
