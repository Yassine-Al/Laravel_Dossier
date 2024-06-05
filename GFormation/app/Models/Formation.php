<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = ['Titre', 'NbrHeure'];
    public $timestamps = false; // Pour desactiver timestamps
    protected $primarykey = 'idF'; // Pour identifier Primary Key

    public function classes()
    {
        return $this->hasMany(Classe::class , 'idFormation');
    }

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class , 'avis');
    }

}
