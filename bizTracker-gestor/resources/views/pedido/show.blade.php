@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pedido:</strong>
                            {{ $pedido->id_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Pedido:</strong>
                            {{ $pedido->fecha_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Entrega:</strong>
                            {{ $pedido->fecha_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $pedido->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $pedido->id_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $pedido->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $pedido->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $pedido->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $pedido->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pago:</strong>
                            {{ $pedido->id_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Id Envio:</strong>
                            {{ $pedido->id_envio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
