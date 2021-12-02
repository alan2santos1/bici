
<h1>form blade</h1>

<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
<!--SE AGREGO IF -->
    @if (@isset($registros1->Foto))
    <br>
      <img src="{{asset('storage').'/'.$registros1->Foto}}" alt="" width="200">
   <br>
@endif

    <input class="form-control" name="Foto" type="file" id="Foto" value="{{ isset($registrobici->Foto) ? $registrobici->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>







<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($registrobici->Nombre) ? $registrobici->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('ApellidoPaterno') ? 'has-error' : ''}}">
    <label for="ApellidoPaterno" class="control-label">{{ 'Apellidopaterno' }}</label>
    <input class="form-control" name="ApellidoPaterno" type="text" id="ApellidoPaterno" value="{{ isset($registrobici->ApellidoPaterno) ? $registrobici->ApellidoPaterno : ''}}" >
    {!! $errors->first('ApellidoPaterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ApellidoMaterno') ? 'has-error' : ''}}">
    <label for="ApellidoMaterno" class="control-label">{{ 'Apellidomaterno' }}</label>
    <input class="form-control" name="ApellidoMaterno" type="text" id="ApellidoMaterno" value="{{ isset($registrobici->ApellidoMaterno) ? $registrobici->ApellidoMaterno : ''}}" >
    {!! $errors->first('ApellidoMaterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Sexo') ? 'has-error' : ''}}">
    <label for="Sexo" class="control-label">{{ 'Sexo' }}</label>
    <select name="Sexo" class="form-control" id="Sexo" >
    @foreach (json_decode('{"hombre":"Hombre","mujer":"Mujer","indefinido":"Indefindo"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registrobici->Sexo) && $registrobici->Sexo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Sexo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    <label for="Telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="Telefono" type="number" id="Telefono" value="{{ isset($registrobici->Telefono) ? $registrobici->Telefono : ''}}" >
    {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="email" id="Correo" value="{{ isset($registrobici->Correo) ? $registrobici->Correo : ''}}" >
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Edad') ? 'has-error' : ''}}">
    <label for="Edad" class="control-label">{{ 'Edad' }}</label>
    <input class="form-control" name="Edad" type="number" id="Edad" value="{{ isset($registrobici->Edad) ? $registrobici->Edad : ''}}" >
    {!! $errors->first('Edad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Identificacion') ? 'has-error' : ''}}">
    <label for="Identificacion" class="control-label">{{ 'Identificacion' }}</label>
    <input class="form-control" name="Identificacion" type="file" id="Identificacion" value="{{ isset($registrobici->Identificacion) ? $registrobici->Identificacion : ''}}" >
    {!! $errors->first('Identificacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Alcaldia') ? 'has-error' : ''}}">
    <label for="Alcaldia" class="control-label">{{ 'Alcaldia' }}</label>
    <select name="Alcaldia" class="form-control" id="Alcaldia" >
    @foreach (json_decode('{"SELECCIONE":"Seleccione Alcaldia", "ALVARO":"Alvaro Obregon", "AZCAPOTZALCO":"Azcapotzalco", "BJ":"Benito Juarez", "COYOACAN":"Coyoacan","CUAJIMALPA":"Cuajimalpa de Morelos", "CUAUHTEMOC":"Cuauhtemoc", "GAM":"Gustavo A. Madero", "IZTACALCO":"Iztacalco", "IZTAPALAPA":"Iztapalapa", "MAGDALENA":"Magdalena Contreras", "MH":"Miguel Hidalgo","MILPAALTA":"Milpa Alta","TLAHUAC":"Tlahuac", "TLALPAN":"Tlalpan", "VC":"Venustiano Carranza", "XOCHIMILCO":"Xochimilco"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registrobici->Alcaldia) && $registrobici->Alcaldia == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Alcaldia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Calle') ? 'has-error' : ''}}">
    <label for="Calle" class="control-label">{{ 'Calle' }}</label>
    <input class="form-control" name="Calle" type="text" id="Calle" value="{{ isset($registrobici->Calle) ? $registrobici->Calle : ''}}" >
    {!! $errors->first('Calle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Numero') ? 'has-error' : ''}}">
    <label for="Numero" class="control-label">{{ 'Numero' }}</label>
    <input class="form-control" name="Numero" type="number" id="Numero" value="{{ isset($registrobici->Numero) ? $registrobici->Numero : ''}}" >
    {!! $errors->first('Numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NumeroInterior') ? 'has-error' : ''}}">
    <label for="NumeroInterior" class="control-label">{{ 'Numerointerior' }}</label>
    <input class="form-control" name="NumeroInterior" type="number" id="NumeroInterior" value="{{ isset($registrobici->NumeroInterior) ? $registrobici->NumeroInterior : ''}}" >
    {!! $errors->first('NumeroInterior', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('colonia') ? 'has-error' : ''}}">
    <label for="colonia" class="control-label">{{ 'Colonia' }}</label>
    <input class="form-control" name="colonia" type="text" id="colonia" value="{{ isset($registrobici->colonia) ? $registrobici->colonia : ''}}" >
    {!! $errors->first('colonia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Cp') ? 'has-error' : ''}}">
    <label for="Cp" class="control-label">{{ 'Cp' }}</label>
    <input class="form-control" name="Cp" type="number" id="Cp" value="{{ isset($registrobici->Cp) ? $registrobici->Cp : ''}}" >
    {!! $errors->first('Cp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('comprobante') ? 'has-error' : ''}}">
    <label for="comprobante" class="control-label">{{ 'Comprobante' }}</label>
    <input class="form-control" name="comprobante" type="file" id="comprobante" value="{{ isset($registrobici->comprobante) ? $registrobici->comprobante : ''}}" >
    {!! $errors->first('comprobante', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
