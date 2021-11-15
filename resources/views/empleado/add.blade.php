@extends('layouts.app')

@section('content')

    @if (count($errors) > 0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)

                    <li> {{ $error }} </li>

                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('empleado.store') }}" class="form-horizontal" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    @csrf

                    <div class="form-group">

                        <div class="control-label">Nombre</div>
                        <input class="form-control {{ $errors->has('Nombre') ? 'is-invalid' :'' }} " type="text" name="Nombre" id=""
                        value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}">
                        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}

                        <div class="control-label">Apellido</div>
                        <input class="form-control {{ $errors->has('Apellido') ? 'is-invalid' : '' }}" type="text"
                            name="Apellido" id="" value="{{ isset($empleado->Apellido)?$empleado->Apellido:old('Apellido') }}">
                        {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}

                        <div class="control-label">Correo</div>
                        <input class="form-control {{ $errors->has('Correo') ? 'is-invalid' : '' }}" type="email"
                            name="Correo" id="" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}">
                        {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}

                        <div class="control-label">Telefono</div>
                        <input class="form-control {{ $errors->has('Telefono') ? 'is-invalid' : '' }}" type="text"
                            name="Telefono" id="" value="{{ isset($empleado->Telefono)?$empleado->Telefono:old('Telefono') }}">
                        {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}

                        <div class="control-label">Cultivo</div>
                        <input class="form-control {{ $errors->has('Cultivo') ? 'is-invalid' : '' }}" type="text"
                            name="Cultivo" id="" value="{{ isset($empleado->Cultivo)?$empleado->Cultivo:old('Cultivo') }}">
                        {!! $errors->first('Cultivo', '<div class="invalid-feedback">:message</div>') !!}

                        <div class="control-label">Municipio</div>
                        <input class="form-control {{ $errors->has('Municipio') ? 'is-invalid' : '' }}" type="text"
                            name="Municipio" id="" value="{{ isset($empleado->Municipio)?$empleado->Municipio:old('Municipio') }}">
                        {!! $errors->first('Municipio', '<div class="invalid-feedback">:message</div>') !!}
                    </div>

                    <button class="btn btn-success" type="submit">Registrar</button>

                    <a class="btn btn-primary" href="{{ url('empleado') }}">regresar</a>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
