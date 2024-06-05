<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['Nom', 'Prenom', 'Adresse', 'dateNaissance', 'idClasse'];
    public $timestamps = false ;
    protected $primarykey = 'CodeE' ;

    public function classe()
    {
        return $this->belongsTo(Classe::class , 'idClasse');
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class , 'avis');
    }
}
