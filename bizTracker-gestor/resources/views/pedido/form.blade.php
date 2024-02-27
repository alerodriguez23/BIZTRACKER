<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pedido') }}
            {{ Form::text('id_pedido', $pedido->id_pedido, ['class' => 'form-control' . ($errors->has('id_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Id Pedido']) }}
            {!! $errors->first('id_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_pedido') }}
            {{ Form::text('fecha_pedido', $pedido->fecha_pedido, ['class' => 'form-control' . ($errors->has('fecha_pedido') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Pedido']) }}
            {!! $errors->first('fecha_pedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_entrega') }}
            {{ Form::text('fecha_entrega', $pedido->fecha_entrega, ['class' => 'form-control' . ($errors->has('fecha_entrega') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Entrega']) }}
            {!! $errors->first('fecha_entrega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_cliente', $pedido->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_producto') }}
            {{ Form::text('id_producto', $pedido->id_producto, ['class' => 'form-control' . ($errors->has('id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Id Producto']) }}
            {!! $errors->first('id_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_producto') }}
            {{ Form::text('nombre_producto', $pedido->nombre_producto, ['class' => 'form-control' . ($errors->has('nombre_producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $pedido->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $pedido->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $pedido->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pago') }}
            {{ Form::text('id_pago', $pedido->id_pago, ['class' => 'form-control' . ($errors->has('id_pago') ? ' is-invalid' : ''), 'placeholder' => 'Id Pago']) }}
            {!! $errors->first('id_pago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_envio') }}
            {{ Form::text('id_envio', $pedido->id_envio, ['class' => 'form-control' . ($errors->has('id_envio') ? ' is-invalid' : ''), 'placeholder' => 'Id Envio']) }}
            {!! $errors->first('id_envio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>