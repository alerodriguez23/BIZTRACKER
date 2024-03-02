@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                            <div class="text-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-sm rounded" style="background-color: #9A816D; color: #fff; padding: 0.5rem 1rem; position: relative; left: -1040%; top: 40px;">
                                    {{ __('Crear nuevo') }}
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body" style="position: relative; top: 60px; ">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-sm text-center">
                                <thead style="background-color: #74675e; color: #ffffff; position:relative; right:-10px; text-alling: center;">
                                    <tr>
                                       
        
										<th >Id Cliente</th>
										<th >Nombre</th>
										<th >Apellido</th>
										<th >Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="table-bordered" style="border-block-style: solid; border-inline-style: dashed;">
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            
                                            
											<td>{{ $cliente->id_cliente }}</td>
											<td>{{ $cliente->nombre }}</td>
											<td>{{ $cliente->apellido }}</td>
											<td>{{ $cliente->telefono }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy', ['id' => $cliente->id_cliente]) }}">

                                                    <a class="btn btn-sm btn-primary" href="{{ route('clientes.show',$cliente->id_cliente) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id_cliente) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
