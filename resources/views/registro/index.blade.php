@extends('layouts.app')

@section('template_title')
    Registro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo registro') }}
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
                                        
										<th>Foto</th>
										<th>Nombre</th>
										<th>Apellidopaterno</th>
										<th>Apellidomaterno</th>
										<th>Sexo</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Fechanacimiento</th>
										<th>Edad</th>
										<th>Identificacion</th>
										<th>Alcaldia</th>
										<th>Calle</th>
										<th>Numero</th>
										<th>Numerointerior</th>
										<th>Colonia</th>
										<th>Cp</th>
										<th>Comprobantedomicilio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $registro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registro->Foto }}</td>
											<td>{{ $registro->Nombre }}</td>
											<td>{{ $registro->ApellidoPaterno }}</td>
											<td>{{ $registro->ApellidoMaterno }}</td>
											<td>{{ $registro->Sexo }}</td>
											<td>{{ $registro->Telefono }}</td>
											<td>{{ $registro->Correo }}</td>
											<td>{{ $registro->FechaNacimiento }}</td>
											<td>{{ $registro->Edad }}</td>
											<td>{{ $registro->Identificacion }}</td>
											<td>{{ $registro->Alcaldia }}</td>
											<td>{{ $registro->Calle }}</td>
											<td>{{ $registro->Numero }}</td>
											<td>{{ $registro->NumeroInterior }}</td>
											<td>{{ $registro->Colonia }}</td>
											<td>{{ $registro->Cp }}</td>
											<td>{{ $registro->ComprobanteDomicilio }}</td>

                                            <td>
                                                <form action="{{ route('registros.destroy',$registro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registros.show',$registro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registros.edit',$registro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $registros->links() !!}
            </div>
        </div>
    </div>
@endsection
