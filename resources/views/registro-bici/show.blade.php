@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">registroBici {{ $registrobici->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/registro-bici') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/registro-bici/' . $registrobici->id . '/edit') }}" title="Edit registroBici"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('registrobici' . '/' . $registrobici->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete registroBici" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $registrobici->id }}</td>
                                    </tr>
                                    <tr><th> Foto </th><td> {{ $registrobici->Foto }} </td></tr><tr><th> Nombre </th><td> {{ $registrobici->Nombre }} </td></tr><tr><th> ApellidoPaterno </th><td> {{ $registrobici->ApellidoPaterno }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
