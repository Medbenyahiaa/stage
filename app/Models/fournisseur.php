<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    protected $fillable = ['raison_social','ICE','adresse','ville','telephone'];
    protected $primaryKey ='id';

}
