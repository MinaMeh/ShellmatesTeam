<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;
class YearsController extends Controller
{
     public function create()
    {
    	return view('years.create');
    }
    public function store(Request $request){
    	$this->validate(request(),[
    		'year'=>'required',
    		'president'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',	
    		'vice'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/'
    	]);
    	Year::create([
    		'scholar_year'=>request('year'),
    		'president'=>request('president'),
    		'vice'=>request('vice')
       	]);
    }
}
