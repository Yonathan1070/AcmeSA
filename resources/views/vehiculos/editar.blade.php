@extends('base.base')
@section('title')
Editar Vehiculo
@endsection
@section('styles')

@endsection
@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            @include('includes.exito')    
            @include('includes.error')
            <div class="card">
                <div class="header">
                    <h2>EDITAR VEHICULO</h2>
                    <ul class="header-dropdown" style="top:10px;">
                    </ul>
                </div>
                <div class="body">
                    <form id="form_validation" action="{{route('actualizar_vehiculo', ['id'=>$vehiculo->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('vehiculos.form')
                        <button class="btn btn-primary btn-block waves-effect" type="submit">ACTUALIZAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection