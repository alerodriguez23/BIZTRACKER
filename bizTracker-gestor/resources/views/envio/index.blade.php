@extends('layouts.app')

@section('template_title')
    Envio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Envio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('envios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Envio</th>
										<th>Id Cliente</th>
										<th>Zona</th>
										<th>Direccion</th>
										<th>Cantidad Paquetes</th>
										<th>Costo Envio</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($envios as $envio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $envio->id_envio }}</td>
											<td>{{ $envio->id_cliente }}</td>
											<td>{{ $envio->zona }}</td>
											<td>{{ $envio->direccion }}</td>
											<td>{{ $envio->cantidad_paquetes }}</td>
											<td>{{ $envio->costo_envio }}</td>
											<td>{{ $envio->telefono }}</td>

                                            <td>
                                                <form action="{{ route('envios.destroy',$envio->id_envio) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('envios.show',$envio->id_envio) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('envios.edit',$envio->id_envio) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $envios->links() !!}
            </div>
        </div>
    </div>
@endsection
