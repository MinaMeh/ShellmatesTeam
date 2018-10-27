<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;
class FormationsController extends Controller
{
    public function show()
    {
    	$year=Year::where('actuel',1)->first();
    	$formations=$year->formations;
    	return view('formations.show',compact('formations'));
    }
}
