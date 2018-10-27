<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Year;

use App\Departement;
class MembersController extends Controller
{
    public function show(){
      $year=Year::where('actuel',1)->first();
    	$members=$year->users;
    	$departements=Departement::all();
    	return view ('members.show',compact('members','departements'));
    }

    public function store(Request $request){
    	$this->validerMembre($request);
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
    	if($departements= request('departements')){
			foreach ($departements as $departement) {
				$user->departements()->attach($departement,['poste'=>"member"]);
			}
		}
		$year=Year::where('actuel',1)->first();
		$year->users()->attach($user->id);
    }

    private function validerMembre(Request $request){
    	$this->validate(request(),[
    		'nom'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',	
    		'prenom'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
     		'email'=>'required|email',
    		'phone'=>'required|max:10|min:9',
    		'school'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
    		'year'=>'required|regex:/^[a-zA-Z0-9\séàèôûêç’\']+$/',
    	]);
    	return redirect('/members');
    }
}
