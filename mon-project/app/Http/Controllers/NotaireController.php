<?php

namespace App\Http\Controllers;

use App\Models\Dossier_Terrain;
use Illuminate\Http\Request;

class NotaireController extends Controller
{
    public function Rechercher(Request $request)
    {
        $numnotaire = $request->numnotaire ;
        $dossiers = Dossier_Terrain::where('numnotaire', $numnotaire)->get();
        return view('vueRechercher' , compact('dossiers'));
    }

    public function SupprimerTous(Request $request)
    {
        $dossier = $request->dossier ;
        Dossier_Terrain::where('iddossier', $dossier)->delete();
        return redirect()->back();
    }

    public function Ajouter(Request $request)
    {
        $request->validate([
            'numn' => 'required | String | starts_with:N | ends_with:E',
            'age' => 'required | integer | min:22' ,
            'email' => 'required | string | email'
        ]);

        Notaire::create($request->all());
        return redirect()->back();
    }

    public function Verifier($id)
    {
        $dossier = Dossier_Terrain::find($id);
        if($dossier)
        {
            if($dossier->etat == "traite")
            {
                $terrain = $dossier->Terrain;
                return response()->json($terrain);
            }
            else
            {
                return response()->json(['message'=>'Dossier en cours de traitement']);
            }
        }
    }
}
