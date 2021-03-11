<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'num_facture' ,
        'motif' ,
        'societe' ,
        'description',
        'dates' ,
        'livreur',
        'decision' ,
        'vendu_a' ,
        'client' ,
        'service_resp',
        'regelement_revente',
        'prix_vente',
        'commerciale',
    ];
}
