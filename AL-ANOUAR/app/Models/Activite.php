<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'dateDebut', 'nombreJours'];

    public function Eleves(){
        return $this->belongsToMany(Eleve::class, 'eleve_activite');
    }
}
