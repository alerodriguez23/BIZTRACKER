@extends('layouts.app')

@section('template_title')
    Categoria
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="card_title" style="font-family:'times new roman', sans-serif; font-size: 24px; color: #333333; text-align: center; display: block;">
                                {{ __('Control de Categorias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('categorias.create') }}" class="btn btn-sm rounded" style="background-color: #9A816D; color: #fff; padding: 0.5rem 1rem; position: relative; left:-1060px; top:40px">
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
                                        
                                        
										<th>Id Categoria</th>
										<th>Nombre</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            
                                            
											<td>{{ $categoria->id_categoria }}</td>
											<td>{{ $categoria->nombre }}</td>
											<td>{{ $categoria->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('categorias.destroy',$categoria->id_categoria) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('categorias.show',$categoria->id_categoria) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('categorias.edit',$categoria->id_categoria) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $categorias->links() !!}
            </div>
        </div>
    </div>
@endsection
