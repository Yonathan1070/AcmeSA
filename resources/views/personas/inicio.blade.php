@extends('base.base')
@section('title')
Listado Personas
@endsection
@section('styles')

@endsection
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cedula</th>
                <th scope="col">Nombres y Apellidos</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
            <tr>
                <th>
                    {{ $persona->PSN_Numero_Cedula_Persona }}
                </th>
                <td>
                    {{ $persona->PSN_Primer_Nombre_Persona }} {{ $persona->PSN_Segundo_Nombre_Persona }} {{ $persona->PSN_Apellidos_Persona }}
                </td>
                <td>
                    {{ $persona->PSN_Direccion_Residencia_Persona }} {{ $persona->PSN_Ciudad_Persona }}
                </td>
                <td>
                    {{ $persona->PSN_Telefono_Persona }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('scripts')

@endsection