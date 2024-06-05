<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier_Terrain extends Model
{
    use HasFactory;

    public function Terrain()
    {
        return $this->belongsTo(Terrain::class , 'numter');
    }

    public function Notaire()
    {
        return $this->belongsTo(Notaire::class , 'numnotaire');
    }
}
