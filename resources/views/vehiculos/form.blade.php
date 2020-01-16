<div class="form-group row">
    <label class="col-sm-5 col-form-label">Placa Vehiculo (*)</label>
    <div class="col-sm-7">
        @if (Request::route()->getName() == 'crear_vehiculo')
        <input type="text" class="form-control form-control-sm" name="VHC_Placa_Vehiculo"
            id="VHC_Placa_Vehiculo"
            value="{{old('VHC_Placa_Vehiculo', $vehiculo->VHC_Placa_Vehiculo ?? '')}}" maxlength="10"
            required>
        @else
        <input type="text" class="form-control form-control-sm" name="VHC_Placa_Vehiculo"
            id="VHC_Placa_Vehiculo"
            value="{{old('VHC_Placa_Vehiculo', $vehiculo->VHC_Placa_Vehiculo ?? '')}}" maxlength="10"
            required readonly>
        @endif
    </div>
    <label class="col-sm-5 col-form-label">Color (*)</label>
    <div class="col-sm-7">
        <input type="text" class="form-control form-control-sm" name="VHC_Color_Vehiculo"
            id="VHC_Color_Vehiculo"
            value="{{old('VHC_Color_Vehiculo', $vehiculo->VHC_Color_Vehiculo ?? '')}}" maxlength="10"
            required>
    </div>
    <label class="col-sm-5 col-form-label">Marca</label>
    <div class="col-sm-7">
        <input type="text" class="form-control form-control-sm" name="VHC_Marca_Vehiculo"
            id="VHC_Marca_Vehiculo"
            value="{{old('VHC_Marca_Vehiculo', $vehiculo->VHC_Marca_Vehiculo ?? '')}}" maxlength="25">
    </div>
    <label class="col-sm-5 col-form-label">Tipo de Vehiculo (*)</label>
    <div class="col-sm-7">
        <select name="VHC_Tipo_Vehiculo" class="form-control form-control-sm" id="VHC_Tipo_Vehiculo" required>
            <option value="">--Seleccione un tipo--</option>
            <option value="Particular">Particular</option>
            <option value="Público">Público</option>
        </select>
    </div>
    <label class="col-sm-5 col-form-label">Propietario (*)</label>
    <div class="col-sm-7">
        <select name="VHC_Propietario_Id" class="form-control form-control-sm" id="VHC_Propietario_Id" required>
            <option value="">--Seleccione un Propietario--</option>
            @foreach ($personas as $persona)
            <option value="{{$persona->id}}">{{ $persona->PSN_Primer_Nombre_Persona.' '.$persona->PSN_Segundo_Nombre_Persona.' '.$persona->PSN_Apellidos_Persona }}</option>
            @endforeach
        </select>
    </div>
    <label class="col-sm-5 col-form-label">Conductor (*)</label>
    <div class="col-sm-7">
        <select name="VHC_Conductor_Id" class="form-control form-control-sm" id="VHC_Conductor_Id" required>
            <option value="">--Seleccione un Conductor--</option>
            @foreach ($disponibles as $persona)
            <option value="{{$persona->id}}">{{ $persona->PSN_Primer_Nombre_Persona.' '.$persona->PSN_Segundo_Nombre_Persona.' '.$persona->PSN_Apellidos_Persona }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-4"></div>
    <span style="color: red;"> (*) Campos Requeridos.</span>
</div>