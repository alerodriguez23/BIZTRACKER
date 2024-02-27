<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormaPago
 *
 * @property $id_pago
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FormaPago extends Model
{
    
    static $rules = [
		'id_pago' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pago','tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'id_pago', 'id_pago');
    }
    

}
