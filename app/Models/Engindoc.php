<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Engindoc extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'engindocs';

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
    protected $fillable = ['visite_technique', 'engin', 'immatriculation', 'date_debut_val', 'date_fin_val', 'effectuer_par', 'piece_jointe', 'engin_id'];

    public function engin_id()
    {
        return $this->belongsTo('App\Models\engin');
    }
    
}
