<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function Create () {
        $nom = 'Alami' ;
        $prenom = 'Yassine' ;
        $age = 20 ;

        return view('Etudiants.Create' , compact('age','prenom','nom'));
    }

    public function index () {
        $etudiants = Etudiant::all();
        $count = $etudiants->count();
        return view('Etudiants.index' , compact('etudiants','count'));
    }

    public function Edit () {
        return view('Etudiants.Edit');
    }

    public function Store(Request $request){
        // $etud = new Etudiant();
        // $etud->matricule = 100;
        // $etud->nom = 'Alami';
        // $etud->note = 18.29;
        // $etud->save();
        // dd($request-> all());
        Etudiant::create(
            $request-> all()
        );
        return redirect()->route('index');

        // Etudiant::create(
        //     [
        //         'matricule' => 200 ,
        //         'nom' => 'Ikram' ,
        //         'note' => 15.66 ,
        //     ]
        // );
    }

    public function update(Request $request, $id){
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($request->all());
        return redirect()->route('index')->with('success', 'Étudiant mis à jour avec succès');
    }
    public function tester(){
        return view('test');
    }
}







