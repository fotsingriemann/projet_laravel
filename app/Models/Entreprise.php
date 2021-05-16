<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entreprises';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['logo', 'nom_client', 'localisation', 'telephone1', 'telephone2', 'email', 'horaire_ouverture', 'jours_ouverture', 'nombre_engin', 'nature_engin', 'responsable', 'secteur_activite', 'sites'];

    
}
