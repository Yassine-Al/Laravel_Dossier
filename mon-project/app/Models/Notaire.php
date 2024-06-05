<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notaire extends Model
{
    use HasFactory;

    public function Dossier()
    {
        return $this->hasMany(Dossier_Terrain::class , 'numnotaire');
    }
}
