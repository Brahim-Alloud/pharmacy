<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'adresse',
        'telephone',
        'email',
        'ville',
        'photo_chemain',
        'heure_matin_ts_debut',
        'heure_matin_ts_fin',
        'heure_soir_ts_debut',
        'heure_soir_ts_fin',
        'heure_soir_fs_debut',
        'heure_soir_fs_fin',
        'semaine_travail_fs',
        'geo_lat',
        'geo_long',
        ];
}
