<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Envio
 *
 * @property $id_envio
 * @property $id_cliente
 * @property $zona
 * @property $direccion
 * @property $cantidad_paquetes
 * @property $costo_envio
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Envio extends Model
{
    
    static $rules = [
		'id_envio' => 'required',
		'id_cliente' => 'required',
		'zona' => 'required',
		'direccion' => 'required',
		'cantidad_paquetes' => 'required',
		'costo_envio' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_envio','id_cliente','zona','direccion','cantidad_paquetes','costo_envio','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'id_envio', 'id_envio');
    }
    

}
