<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'Club_id'];

    public function Club(){
        return $this->belongsTo(Club::class);
    }

    public function Activites(){
        return $this->belongsToMany(Activite::class, 'eleve_activite');
    }

    public function getTotalJour(){
        // $Total = 0;
        // foreach($this->Activites as $act )
        // {
        //     $Total += $act->nombreJours;
        // }
        return $this->Activites->sum('nombreJours');
    }
}
