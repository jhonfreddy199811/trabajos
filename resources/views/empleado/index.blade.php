@extends('layouts.app')

@section('content')

    @if (Session::has('Mensaje'))
     <div class="alert alert-success" role="alert">
        {{ Session::get('Mensaje') }}
     </div>


    @endif

    <div class="container p5">
        <div class="row">
            <div class="col-md-6 ">
                <h1>crear empleado</h1>
                <a class="btn btn-success btn-block" href="{{ route('empleado.create') }}">crear empleado</a>

                <div class="">
                    <div class="card-body ">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Cultivo</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Aciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($empleado as $user)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->Nombre }} </td>
                                        <td>{{ $user->Apellido }}</td>
                                        <td>{{ $user->Correo }}</td>
                                        <td>{{ $user->Telefono }}</td>
                                        <td>{{ $user->Cultivo }}</td>
                                        <td>{{ $user->Municipio }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('empleado.edit', $user->id) }}"
                                                class="btn btn success ">Modificar</a>

                                            <form method="POST" action="{{ route('empleado.destroy', $user->id) }}"
                                                style="display: inline">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="return confirm('¿Borrar?');">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{ $empleado->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
