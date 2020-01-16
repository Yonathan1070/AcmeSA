@extends('base.base')
@section('title')
Crear Persona
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
                    <h2>CREAR PERSONA</h2>
                    <ul class="header-dropdown" style="top:10px;">
                    </ul>
                </div>
                <div class="body">
                    <form id="form_validation" action="{{route('guardar_persona')}}" method="POST">
                        @csrf
                        @include('personas.form')
                        <button class="btn btn-primary btn-block waves-effect" type="submit">GUARDAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection