@extends('layouts.app')

@section('template_title')
    {{ $envio->name ?? "{{ __('Show') Envio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Envio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('envios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Envio:</strong>
                            {{ $envio->id_envio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $envio->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Zona:</strong>
                            {{ $envio->zona }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $envio->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Paquetes:</strong>
                            {{ $envio->cantidad_paquetes }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Envio:</strong>
                            {{ $envio->costo_envio }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $envio->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
