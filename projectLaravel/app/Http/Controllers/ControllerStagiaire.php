<?php

namespace App\Http\Controllers;

use App\Http\Requests\stagiaireRequest;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ControllerStagiaire extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //Afficher les stgiaires qui existe dans la base de données 
    public function index(){
        $stagiaires = Stagiaire::all();
        return view('Stagiaire.index',compact('stagiaires'));
    }
    //Afficher les informations d'un stagiaire 
    public function show(Stagiaire $stagiaire){
        return view('Stagiaire.show',compact('stagiaire'));
    }
    public function create(){
        return view('Stagiaire.create');
    }
    public function store(stagiaireRequest $request){
        //Validation dans stagiaireRequest

        //Insertion
        Stagiaire::create([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'age'=>$request->input('age'),
            'email'=>$request->input('email'),
            'filiere'=>$request->input('filiere'),
            'image'=>$request->file('image')->store('images','public'),
            'password'=>Hash::make($request->input('password')),
        ]
          
        );
        return redirect()->route('stagiaires.index')->with('success','Votre compte est bien créé .');
        //redirect()
        //redirect()->rout(...) equivalent => to_route()
        //redirect()->action(...)
        //back()->withInput()

    }
    //Delete stagiaire
    public function destroy(Stagiaire $stagiaire){
        $stagiaire->delete();
        return to_route('stagiaires.index')->with('success','Le stagiaire est bien supprimer');
    }
    public function edit(Stagiaire $stagiaire){
        return view('Stagiaire.edit',compact('stagiaire'));
    }
    public function update(stagiaireRequest $stagiaireRequest ,Stagiaire $stagiaire){
        $validatedS = $stagiaireRequest->validated();
        if($stagiaireRequest->hasFile('image')){
        $validatedS['image']=$stagiaireRequest->file('image')->store('images','public');
        };
        $stagiaire->update($validatedS);
        return redirect()->route('stagiaires.show',$stagiaire->id);
    }
    
    



}
