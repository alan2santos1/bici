<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registroBici extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'registro_bicis';

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
    protected $fillable = ['Foto', 'Nombre', 'ApellidoPaterno', 'ApellidoMaterno', 'Sexo', 'Telefono', 'Correo', 'Edad', 'Identificacion', 'Alcaldia', 'Calle', 'Numero', 'NumeroInterior', 'colonia', 'Cp', 'comprobante'];

    
}
