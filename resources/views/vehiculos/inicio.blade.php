@extends('base.base')
@section('title')
    Listado Vehiculos
@endsection
@section('styles')
    
@endsection
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Placa</th>
                <th scope="col">Marca</th>
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
                <td>
                    {{ $vehiculo->VHC_Marca_Vehiculo }}
                </td>
                <td>
                    {{ $vehiculo->Primer_Nombre_Propietario }} {{ $vehiculo->Segundo_Nombre_Propietario }} {{ $vehiculo->Apellidos_Propietario }}
                </td>
                <td>
                    {{ $vehiculo->Primer_Nombre_Conductor }} {{ $vehiculo->Segundo_Nombre_Conductor }} {{ $vehiculo->Apellidos_Conductor }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
    
@endsection