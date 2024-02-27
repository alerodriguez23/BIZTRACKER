<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id_producto
 * @property $descripcion
 * @property $stock
 * @property $precio
 * @property $id_categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'id_producto' => 'required',
		'descripcion' => 'required',
		'stock' => 'required',
		'precio' => 'required',
		'id_categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_producto','descripcion','stock','precio','id_categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id_categoria', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'id_producto', 'id_producto');
    }
    

}
