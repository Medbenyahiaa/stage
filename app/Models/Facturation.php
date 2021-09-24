<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facturation extends Model
{
    protected $fillable = ['client_id','numero_facture','montant','date_facture'];
    protected $primaryKey ='id';

}
