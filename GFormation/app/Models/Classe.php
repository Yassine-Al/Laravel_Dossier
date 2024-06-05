<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['Libelle', 'NombreMax', 'idFormation'];
    public $timestamps = false ;
    protected $primarykey = 'idC' ;

    public function formation ()
    {
        return $this->belongsTo(Formation::class , 'idFormation');
    }
    
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class , 'idClasse');
    }
}

