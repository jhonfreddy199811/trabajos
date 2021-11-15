@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/empleado/'. $empleado->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="label">Nombre</div>
                <input class="form-control" type="text" name="Nombre" id="" value="{{ $empleado->Nombre }}">
                <br/>

                <div class="label">Apellido</div>
                <input class="form-control" type="text" name="Apellido" id="" value="{{ $empleado->Apellido }}">
                <br/>

                <div class="label">Correo</div>
                <input class="form-control" type="email" name="Correo" id="" value="{{ $empleado->Correo }}">
                <br/>

                <div class="label">Telefono</div>
                <input class="form-control" type="text" name="Telefono" id="" value="{{ $empleado->Telefono }}">
                <br/>

                <div class="label">Cultivo</div>
                <input class="form-control" type="text" name="Cultivo" id="" value="{{ $empleado->Cultivo }}">
                <br/>

                <div class="label">Municipio</div>
                <input class="form-control" type="text" name="Municipio" id="" value="{{ $empleado->Municipio }}">
                <br/>

                <button class="btn btn-success btn-block" type="submit">guardar</button>
                <br/>

                <a class="btn btn-success btn-block" href="{{ url('empleado') }}">regresar</a>


            </form>
        </div>
    </div>
</div>

@endsection
