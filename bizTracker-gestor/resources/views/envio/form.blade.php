<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_envio') }}
            {{ Form::text('id_envio', $envio->id_envio, ['class' => 'form-control' . ($errors->has('id_envio') ? ' is-invalid' : ''), 'placeholder' => 'Id Envio']) }}
            {!! $errors->first('id_envio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_cliente', $envio->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('zona') }}
            {{ Form::text('zona', $envio->zona, ['class' => 'form-control' . ($errors->has('zona') ? ' is-invalid' : ''), 'placeholder' => 'Zona']) }}
            {!! $errors->first('zona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $envio->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_paquetes') }}
            {{ Form::text('cantidad_paquetes', $envio->cantidad_paquetes, ['class' => 'form-control' . ($errors->has('cantidad_paquetes') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Paquetes']) }}
            {!! $errors->first('cantidad_paquetes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo_envio') }}
            {{ Form::text('costo_envio', $envio->costo_envio, ['class' => 'form-control' . ($errors->has('costo_envio') ? ' is-invalid' : ''), 'placeholder' => 'Costo Envio']) }}
            {!! $errors->first('costo_envio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $envio->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>