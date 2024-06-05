<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['numCom', 'dateCom'];

    public function Client(){
        return $this->hasMany(Client::class , 'id_Client');
    }

    public function Article(){
        return $this->belongsToMany(Article::class);
    }
}
