<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id_pedido
 * @property $fecha_pedido
 * @property $fecha_entrega
 * @property $id_cliente
 * @property $id_producto
 * @property $nombre_producto
 * @property $observaciones
 * @property $cantidad
 * @property $precio
 * @property $id_pago
 * @property $id_envio
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Envio $envio
 * @property FormaPago $formaPago
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'id_pedido' => 'required',
		'fecha_pedido' => 'required',
		'fecha_entrega' => 'required',
		'id_cliente' => 'required',
		'id_producto' => 'required',
		'nombre_producto' => 'required',
		'observaciones' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'id_pago' => 'required',
		'id_envio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pedido','fecha_pedido','fecha_entrega','id_cliente','id_producto','nombre_producto','observaciones','cantidad','precio','id_pago','id_envio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function envio()
    {
        return $this->hasOne('App\Models\Envio', 'id_envio', 'id_envio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function formaPago()
    {
        return $this->hasOne('App\Models\FormaPago', 'id_pago', 'id_pago');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id_producto', 'id_producto');
    }
    

}
