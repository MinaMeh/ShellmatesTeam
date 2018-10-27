<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;
use App\User;

class YearsController extends Controller
{
    

    public function show(){
    	$years=Year::all();
    	return view('years.show',compact('years'));
    }

    public function create(){
    	return view ('years.create');
    }

    public function validerYear(Request $request){
    	$this->validate(request(),[
    		'year'=>'required',
    		'nom_p'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',	
    		'prenom_p'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
     		'email_p'=>'required|email',
    		'phone_p'=>'required|max:10|min:9',
    		'school_p'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
    		'year_p'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
			'nom_vp'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
     		'email_vp'=>'required|email',
    		'phone_vp'=>'required|max:10|min:9',
      		'prenom_vp'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
    		'school_vp'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
    		'year_vp'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/'

    	]);	
    } 
    public function store(Request $request){
		\DB::update('update years SET actuel=false');    
		$this->validerYear($request);	
    	$year=Year::create([
    		'scholar_year'=>request('year')
       	]);
       	$president=User::create([
       		'nom'=>request('nom_p'),
       		'prenom'=>request('prenom_p'),
       		'email'=>request('email_p'),
       		'post'=>'Président(e)',
       		'phone'=>request('phone_p'),
       		'year'=>request('year_p'),
       		'school'=>request('school_p'),
       		'password'=>'',
       		'facebook'=>request('facebook_p')
       	]);
       	$vice=User::create([
       		'nom'=>request('nom_vp'),
       		'prenom'=>request('prenom_vp'),
       		'email'=>request('email_vp'),
       		'post'=>'Vice-président(e)',
       		'phone'=>request('phone_vp'),
       		'year'=>request('year_vp'),
       		'school'=>request('school_vp'),
        		'password'=>'',
      		'facebook'=>request('facebook_vp')
       	]);
       	$year->users()->attach($president->id);
       	$year->users()->attach($vice->id);
       	
       	return redirect('/years');
    }
}
