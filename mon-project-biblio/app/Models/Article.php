<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'designation', 'prix'];

    public function Commande(){
        return $this->belongsToMany(Commande::class);
    }
}
