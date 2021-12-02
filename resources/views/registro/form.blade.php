<div class="box box-info padding-1">
    <div class="box-body">
        {{-- Foto--}}

        <div class="form-group">
            {{ Form::label('Foto') }}
            {{ Form::text('Foto', $registro->Foto, ['class' => 'form-control' . ($errors->has('Foto') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
            {!! $errors->first('Foto', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        

        {{-- TERMINA Foto--}}


        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $registro->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoPaterno') }}
            {{ Form::text('ApellidoPaterno', $registro->ApellidoPaterno, ['class' => 'form-control' . ($errors->has('ApellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidopaterno']) }}
            {!! $errors->first('ApellidoPaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ApellidoMaterno') }}
            {{ Form::text('ApellidoMaterno', $registro->ApellidoMaterno, ['class' => 'form-control' . ($errors->has('ApellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidomaterno']) }}
            {!! $errors->first('ApellidoMaterno', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('Sexo', $registro->Sexo, ['class' => 'form-control' . ($errors->has('Sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('Sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $registro->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $registro->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaNacimiento') }}
            {{ Form::text('FechaNacimiento', $registro->FechaNacimiento, ['class' => 'form-control' . ($errors->has('FechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanacimiento']) }}
            {!! $errors->first('FechaNacimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('Edad', $registro->Edad, ['class' => 'form-control' . ($errors->has('Edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('Edad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Identificacion') }}
            {{ Form::text('Identificacion', $registro->Identificacion, ['class' => 'form-control' . ($errors->has('Identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion']) }}
            {!! $errors->first('Identificacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Alcaldia') }}
            {{ Form::text('Alcaldia', $registro->Alcaldia, ['class' => 'form-control' . ($errors->has('Alcaldia') ? ' is-invalid' : ''), 'placeholder' => 'Alcaldia']) }}
            {!! $errors->first('Alcaldia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Calle') }}
            {{ Form::text('Calle', $registro->Calle, ['class' => 'form-control' . ($errors->has('Calle') ? ' is-invalid' : ''), 'placeholder' => 'Calle']) }}
            {!! $errors->first('Calle', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero') }}
            {{ Form::text('Numero', $registro->Numero, ['class' => 'form-control' . ($errors->has('Numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('Numero', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroInterior') }}
            {{ Form::text('NumeroInterior', $registro->NumeroInterior, ['class' => 'form-control' . ($errors->has('NumeroInterior') ? ' is-invalid' : ''), 'placeholder' => 'Numerointerior']) }}
            {!! $errors->first('NumeroInterior', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Colonia') }}
            {{ Form::text('Colonia', $registro->Colonia, ['class' => 'form-control' . ($errors->has('Colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('Colonia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cp') }}
            {{ Form::text('Cp', $registro->Cp, ['class' => 'form-control' . ($errors->has('Cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp']) }}
            {!! $errors->first('Cp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ComprobanteDomicilio') }}
            {{ Form::text('ComprobanteDomicilio', $registro->ComprobanteDomicilio, ['class' => 'form-control' . ($errors->has('ComprobanteDomicilio') ? ' is-invalid' : ''), 'placeholder' => 'Comprobantedomicilio']) }}
            {!! $errors->first('ComprobanteDomicilio', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>