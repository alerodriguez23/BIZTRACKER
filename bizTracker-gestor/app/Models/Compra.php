<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id_compra
 * @property $descripcion
 * @property $cantidad
 * @property $precio
 * @property $id_proveedor
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'id_compra' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'id_proveedor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_compra','descripcion','cantidad','precio','id_proveedor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id_proveedor', 'id_proveedor');
    }
    

}
