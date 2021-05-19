<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'engins';

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
    protected $fillable = ['engin_name', 'immatriculation', 'marque_serie', 'modele', 'numero_chassis', 'date_de_mise_en_circulation', 'carburant', 'couleur', 'conduit_par', 'Image', 'entreprise_id', 'engintype_id'];

    public function entreprise_id()
    {
        return $this->belongsTo('App\Models\entreprise');
    }
    public function engintype_id()
    {
        return $this->belongsTo('App\Models\engintype');
    }
    
}
