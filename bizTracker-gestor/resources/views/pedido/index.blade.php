@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <style>
        .table-container {
            margin-top: 60px;
            width: 100%; 
        }

        .table-container .table {
            width: 100%; 
            max-width: 100%; 
            border-collapse: collapse; 
        }

        .table-container .table thead {
            background-color: #74675e;
            color: #ffffff;
        }

        .table-container .table th,
        .table-container .table td {
            text-align: center;
            padding: 8px; 
            border: 1px solid #ddd; 
        }

        .table-container .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-container .table-hover tbody tr:hover {
            background-color: #dcdcdc;
        }

        .btn-action {
            background-color: #74675e; 
            border: none; 
            padding: 5px 10px; 
            font-size: 14px; 
            border-radius: 5px; 
            cursor: pointer; 
            margin-right: 5px; 
        }

        .btn-action:hover {
            background-color: #74675e; 
        }

        .btn-show {
            background-color: #74675e; 
        }

        .btn-edit {
            background-color: #74675e; 
        }

        .btn-delete {
            background-color: #74675e; 
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                        <span class="card_title" style="font-family:'times new roman', sans-serif; font-size: 24px; color: #333333; text-align: center; display: block;">
                                {{ __('Control de Pedidos') }}
                            </span>

                            <div class="text-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-sm btn-rounded btn-primary btn-action">
                                    {{ __('Crear nuevo') }}
                                </a>
                                <a href="#" class="btn btn-sm btn-action btn-show">
                                    {{ __('Show') }}
                                </a>
                                <a href="#" class="btn btn-sm btn-action btn-edit">
                                    {{ __('Edit') }}
                                </a>
                                <a href="#" class="btn btn-sm btn-action btn-delete">
                                    {{ __('Delete') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body table-container">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id_pedido </th>
                                        <th>fecha_pedido</th>
                                        <th>fecha_entrega</th>
                                        <th>d_cliente</th>
                                        <th>id_producto</th>
                                        <th>>nombre_producto</th>
                                        <th>observaciones</th>
                                        <th>antidad</th>
                                        <th>precio </th>
                                        <th>id_pago</th>
                                        <th>id_envio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedidos)
                                        <tr>
                                            <td>{{ $pedidos->id_pedido }}</td>
                                            <td>{{ $pedidos->fecha_pedido }}</td>
                                            <td>{{ $pedidos->fecha_entrega }}</td>
                                            <td>{{ $pedidos->id_cliente }}</td>
                                            <td>{{ $pedidos->id_producto}}</td>
                                            <td>{{ $pedidos->nombre_producto }}</td>
                                            <td>{{ $pedidos->observaciones }}</td>
                                            <td>{{ $pedidos->cantidad }}</td>
                                            <td>{{ $pedidos->precio }}</td>
                                            <td>{{ $pedidos->id_pago}}</td>
                                            <td>{{ $pedidos->id_envio }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pedidos->links() !!}
            </div>
        </div>
    </div>
@endsection
