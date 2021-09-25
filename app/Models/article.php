<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    
    protected $fillable = ['description','prixU','quantite','facturation_id'];
    protected $primaryKey ='id';
}
