<div class="form-group row">
    <label class="col-sm-5 col-form-label">Número de Cédula (*)</label>
    <div class="col-sm-7">
        @if (Request::route()->getName() == 'crear_persona')
        <input type="text" class="form-control form-control-sm" name="PSN_Numero_Cedula_Persona"
            id="PSN_Numero_Cedula_Persona"
            value="{{old('PSN_Numero_Cedula_Persona', $persona->PSN_Numero_Cedula_Persona ?? '')}}" maxlength="15"
            required>
        @else
        <input type="text" class="form-control form-control-sm" name="PSN_Numero_Cedula_Persona"
            id="PSN_Numero_Cedula_Persona"
            value="{{old('PSN_Numero_Cedula_Persona', $persona->PSN_Numero_Cedula_Persona ?? '')}}" maxlength="15"
            required readonly>
        @endif
    </div>
    <label class="col-sm-5 col-form-label">Primer Nombre (*)</label>
    <div class="col-sm-7">
        <input type="text" class="form-control form-control-sm" name="PSN_Primer_Nombre_Persona"
            id="PSN_Primer_Nombre_Persona"
            value="{{old('PSN_Primer_Nombre_Persona', $persona->PSN_Primer_Nombre_Persona ?? '')}}" maxlength="25"
            required>
    </div>
    <label class="col-sm-5 col-form-label">Segundo Nombre</label>
    <div class="col-sm-7">
        <input type="text" class="form-control form-control-sm" name="PSN_Segundo_Nombre_Persona"
            id="PSN_Segundo_Nombre_Persona"
            value="{{old('PSN_Segundo_Nombre_Persona', $persona->PSN_Segundo_Nombre_Persona ?? '')}}" maxlength="25">
    </div>
    <label class="col-sm-5 col-form-label">Apellidos (*)</label>
    <div class="col-sm-7">
        <input type="text" class="form-control form-control-sm" name="PSN_Apellidos_Persona" id="PSN_Apellidos_Persona"
            value="{{old('PSN_Apellidos_Persona', $persona->PSN_Apellidos_Persona ?? '')}}" maxlength="50" required>
    </div>
    <label class="col-sm-5 col-form-label">Dirección de Residencia (*)</label>
    <div class="col-sm-7">
        <input type="text" class="form-control form-control-sm" name="PSN_Direccion_Residencia_Persona"
            id="PSN_Direccion_Residencia_Persona"
            value="{{old('PSN_Direccion_Residencia_Persona', $persona->PSN_Direccion_Residencia_Persona ?? '')}}"
            maxlength="100" required>
    </div>
    <label class="col-sm-5 col-form-label">Telefono de Contacto (*)</label>
    <div class="col-sm-7">
        <input type="text" class="form-control form-control-sm" name="PSN_Telefono_Persona" id="PSN_Telefono_Persona"
            value="{{old('PSN_Telefono_Persona', $persona->PSN_Telefono_Persona ?? '')}}" maxlength="15" required>
    </div>
    <label class="col-sm-5 col-form-label">Ciudad de Residencia (*)</label>
    <div class="col-sm-7">
        <input type="text" class="form-control form-control-sm" name="PSN_Ciudad_Persona" id="PSN_Ciudad_Persona"
            value="{{old('PSN_Ciudad_Persona', $persona->PSN_Ciudad_Persona ?? '')}}" maxlength="30" required>
    </div>
    <div class="col-sm-4"></div>
    <span style="color: red;"> (*) Campos Requeridos.</span>
</div>