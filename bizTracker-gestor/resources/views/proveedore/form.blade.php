<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_proveedor') }}
            {{ Form::text('id_proveedor', $proveedore->id_proveedor, ['class' => 'form-control' . ($errors->has('id_proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Id Proveedor']) }}
            {!! $errors->first('id_proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proveedor') }}
            {{ Form::text('Proveedor', $proveedore->Proveedor, ['class' => 'form-control' . ($errors->has('Proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('Proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_categoria') }}
            {{ Form::text('id_categoria', $proveedore->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Id Categoria']) }}
            {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>