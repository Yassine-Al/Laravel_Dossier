<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stgs = DB::table('stagiaire')->get();
        return view('Stagiaires.Acceuil', compact('stgs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Stagiaires.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('stagiaire')->insert([
            'Nom' => $request->Nom,
            'Prenom' => $request->Prenom,
            'Age' => $request->Age,
        ]);
        return redirect()->route('index')->with('success' , 'Le Stagiaire est bien ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stgfind = DB::table('stagiaire')->find($id);
        return view('Stagiaires.Modifier', compact('stgfind'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('stagiaire')
            ->where('id',$id)
            ->update([
                "Nom" => $request->Nom,
                "Prenom" => $request->Prenom,
                "Age" => $request->Age,
            ]);
        return redirect()->route('index')->with('updated' , 'Le Stagiaire est Modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('stagiaire')->where('id', $id)->delete();
        return redirect()->route('index')->with('delete', 'Le Stagiaire est Supprime avec success');
    }
    public function showdelete(string $id)
    {
        // $stgfind = DB::table('stagiaire')->find($id);
        return view('Stagiaires.showdelete', compact('id'));
    }
}
