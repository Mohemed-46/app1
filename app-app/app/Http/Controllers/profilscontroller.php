<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
class profilscontroller extends Controller
{
	 function form(){
    return view ('formolair');
}
function store(Request $request){
    $request->validate([
    'nom' => 'required|alpha|max:50',
    'prenom' => 'required|alpha|max:50',
    'email' => 'required|max:60|email:rfc,dns',
]);
    $cv= new Cv ;
    $cv->nom=$request->nom;
    $cv->prenom=$request->prenom;
    $cv->email=$request->email;
    $cv->save();
 return redirect('/form/liste');
}
	 function liste_cv(){
    $cvs=Cv::all();
    return view('liste')->with("cv",$cvs);
}
}
