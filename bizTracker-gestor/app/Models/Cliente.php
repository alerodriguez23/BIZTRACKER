<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id_cliente
 * @property $nombre
 * @property $apellido
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Envio[] $envios
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'id_cliente' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','nombre','apellido','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function envios()
    {
        return $this->hasMany('App\Models\Envio', 'id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'id_cliente', 'id_cliente');
    }
    

}
