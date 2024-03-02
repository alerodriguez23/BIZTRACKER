@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="card_title" style="font-family:'times new roman', sans-serif; font-size: 24px; color: #333333; text-align: center; display: block;">
                                {{ __('Control de Productos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-sm rounded" style="background-color: #9A816D; color: #fff; padding: 0.5rem 1rem; position: relative; left:-1060px; top:40px">
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
                                       
                                        
										<th>Id Producto</th>
										<th>Descripcion</th>
										<th>Stock</th>
										<th>Precio</th>
										<th>Id Categoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                           
                                            
											<td>{{ $producto->id_producto }}</td>
											<td>{{ $producto->descripcion }}</td>
											<td>{{ $producto->stock }}</td>
											<td>{{ $producto->precio }}</td>
											<td>{{ $producto->id_categoria }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id_producto) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id_producto) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id_producto) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
