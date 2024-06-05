<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = DB::table('commandes')
            ->join('clients', 'commandes.id_Client' , '=', 'clients.id')
            ->get();
        return view('Commande.index', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client = Client::all();
        return view('Commande.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Commande = new Commande();
        $Commande->numCom = $request->numCom;
        $Commande->dateCom = $request->dateCom;
        $Commande->id_Client = $request->id_Client;
        $Commande->save();
        return redirect()->route('Commande.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $commande = DB::table('commandes')
                ->join('clients' , 'commandes.id_Client', 'clients.id')
                ->where('commandes.id' , $id)->get([
                    'commandes.id' => 'commandes.id',
                    'numCom' => 'numCom',
                    'dateCom' => 'dateCom',
                    'client' => 'clients.nom'
                ]);
        $details = DB::table('articles')->join('details' , 'articles.id' , 'details.id_Article')
                ->where('details.id_Commande', $id)->get([
                    'Numero' => 'articles.numero',
                    'designation' => 'designation',
                    'prix' => 'prix',
                    'quantite' => 'quantite'
                ]);
        // dd($details);
        return view('Commande.show', compact('commande', 'details'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commandeFind = DB::table('commandes')->where('id' , $id)->get();
        $client = Client::all();
        return view('Commande.edit', compact('commandeFind', 'client'));
        // dd($commandeFind);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $commande = DB::table('commandes')->where('id', $id)
            ->update([
                "numCom" => $request->numCom,
                "dateCom" => $request->dateCom,
                "id_Client" => $request->id_Client,
            ]);
        return redirect()->route('Commande.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
