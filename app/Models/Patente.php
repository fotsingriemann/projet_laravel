<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'patentes';

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
    protected $fillable = ['engin_name', 'montant', 'date_debut_val', 'date_fin_val', 'delivrer_par', 'piece_jointe', 'engin_id'];

    public function engin_id()
    {
        return $this->belongsTo('App\Models\engin');
    }
    
}
