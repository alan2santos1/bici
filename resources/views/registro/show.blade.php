@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? 'Show Registro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $registro->Foto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $registro->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $registro->ApellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $registro->ApellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $registro->Sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $registro->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $registro->Correo }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $registro->FechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $registro->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Identificacion:</strong>
                            {{ $registro->Identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Alcaldia:</strong>
                            {{ $registro->Alcaldia }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $registro->Calle }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $registro->Numero }}
                        </div>
                        <div class="form-group">
                            <strong>Numerointerior:</strong>
                            {{ $registro->NumeroInterior }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $registro->Colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            {{ $registro->Cp }}
                        </div>
                        <div class="form-group">
                            <strong>Comprobantedomicilio:</strong>
                            {{ $registro->ComprobanteDomicilio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
