@extends('base.base')
@section('title')
Listado Vehiculos
@endsection
@section('styles')

@endsection
@section('content')
<div class="container">
    <h1>Listado de Vehiculos</h1>
    <a href="{{route('crear_vehiculo')}}" class="btn btn-info">Crear Vehiculo</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Placa</th>
                <th scope="col">Color</th>
                <th scope="col">Marca</th>
                <th scope="col">Tipo</th>
                <th scope="col">Conductor</th>
                <th scope="col">Propietario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
            <tr>
                <th>
                    {{ $vehiculo->VHC_Placa_Vehiculo }}
                </th>
                <th>
                    {{ $vehiculo->VHC_Color_Vehiculo }}
                </th>
                <td>
                    {{ $vehiculo->VHC_Marca_Vehiculo }}
                </td>
                <th>
                    {{ $vehiculo->VHC_Tipo_Vehiculo }}
                </th>
                <td>
                    {{ $vehiculo->Primer_Nombre_Conductor }} {{ $vehiculo->Segundo_Nombre_Conductor }}
                    {{ $vehiculo->Apellidos_Conductor }}
                </td>
                <td>
                    {{ $vehiculo->Primer_Nombre_Propietario }} {{ $vehiculo->Segundo_Nombre_Propietario }}
                    {{ $vehiculo->Apellidos_Propietario }}
                </td>
                <td>
                    <a href="{{route('editar_vehiculo', ['id'=>$vehiculo->VH_Id])}}"
                        class="btn btn-sm btn-info">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('scripts')

@endsection