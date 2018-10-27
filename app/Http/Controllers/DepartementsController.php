<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departement;
use App\User;

class DepartementsController extends Controller
{
    public function show(){
    	$departements=Departement::all();
    	return view ('departements.show',compact('departements'));
    }
    public function store(Request $request){
    	$this->validerDepartement($request);
    	$departement=Departement::create([
    		'designation'=>request('designation'),
    		'role'=>request('role'),
    	]);
    	$user=User::create([
    		'nom'=>request('nom'),
       		'prenom'=>request('prenom'),
       		'email'=>request('email'),
       		'phone'=>request('phone'),
       		'year'=>request('year'),
       		'school'=>request('school'),
       		'password'=>'',
       		'facebook'=>request('facebook')
    	]);
    	$departement->users()->attach($user->id,['poste'=>'chef département',
]);
    	return redirect('/departements');
    }

    public function validerDepartement(Request $request){
    	$this->validate(request(),[
    		'designation'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
    		'role'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
    		'nom'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',	
    		'prenom'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
     		'email'=>'required|email',
    		'phone'=>'required|max:10|min:9',
    		'school'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
    		'year'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/']);
			

    }
}
