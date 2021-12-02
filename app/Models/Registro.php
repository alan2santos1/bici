<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $Foto
 * @property $Nombre
 * @property $ApellidoPaterno
 * @property $ApellidoMaterno
 * @property $Sexo
 * @property $Telefono
 * @property $Correo
 * @property $FechaNacimiento
 * @property $Edad
 * @property $Identificacion
 * @property $Alcaldia
 * @property $Calle
 * @property $Numero
 * @property $NumeroInterior
 * @property $Colonia
 * @property $Cp
 * @property $ComprobanteDomicilio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'Sexo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Foto','Nombre','ApellidoPaterno','ApellidoMaterno','Sexo','Telefono','Correo','FechaNacimiento','Edad','Identificacion','Alcaldia','Calle','Numero','NumeroInterior','Colonia','Cp','ComprobanteDomicilio'];



}
