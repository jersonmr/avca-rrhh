{!! Form::open() !!}

    <fieldset>
        <legend>Datos personales</legend>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    {!! Form::label('apellidos', 'Apellidos') !!}
                    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    {!! Form::label('nombres', 'Nombres') !!}
                    {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('', '') !!}
                    {!! Form::file('foto', ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!} <i class="fas fa-calendar"></i>
                    {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('genero', 'Género') !!} <br>
                    {!! Form::radio('genero', 'femenino', false, []) !!} Femenino                    
                    {!! Form::radio('genero', 'masculino', false, []) !!} Masculino
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('profesion', 'Profesión') !!}
                    {!! Form::select('profesion', [], [], ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    {!! Form::label('codigo_postal', 'Código postal') !!}
                    {!! Form::text('codigo_postal', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('municipio', 'Municipio') !!} <br>
                    {!! Form::select('municipio', [], [], ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    {!! Form::label('direccion_local', 'Dirección local') !!}
                    {!! Form::text('direccion_local', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('discapacidad', '¿Posee alguna discapacidad?') !!} <br>
                    {!! Form::radio('discapacidad', 'si', []) !!} Si
                    {!! Form::radio('discapacidad', 'no', []) !!} No
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('tipo_discapacidad', 'Tipo de discapacidad') !!}
                    {!! Form::select('tipo_discapacidad', [
                        ''                               => 'Seleccione',
                        'trastornos de habla y lenguaje' => 'Trastornos de habla y lenguaje',
                        'visual'                         => 'Visual',
                        'motriz'                         => 'motriz',
                        'auditiva'                       => 'auditiva'
                        ], '', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </fieldset>

    <hr>

    <fieldset>
        <legend>Datos laborales</legend>
        <div class="row">
            <div class="col-md-3">
                {!! Form::label('cargo', 'Cargo') !!}
                {!! Form::select('cargo', [
                    '' => 'Seleccione',                    
                    ], '', ['class' => 'form-control']) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label('nivel', 'Nivel') !!}
                {!! Form::text('nivel', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label('sueldo_base', 'Sueldo Base') !!}
                {!! Form::text('sueldo_base', null, ['class' => 'form-control']) !!}
            </div>
            <div class="col-md-3">
                {!! Form::label('forma_pago', 'Forma de pago') !!}
                {!! Form::select('forma_pago', [
                    ''          => 'Seleccione',
                    'semanal'   => 'Semanal',
                    'quincenal' => 'Quincenal',
                    'mensual'   => 'Mensual'
                    ], '', ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">                    
                    {!! Form::label('fecha_ingreso', 'Fecha de ingreso') !!} <i class="fas fa-calendar"></i>
                    {!! Form::date('fecha_ingreso', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('fecha_retiro', 'Fecha de retiro') !!} <i class="fas fa-calendar"></i>
                    {!! Form::date('fecha_retiro', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">                    
                    {!! Form::label('sucursal', 'Sucursal') !!}
                    {!! Form::select('sucursal', [], [], ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">                    
                    {!! Form::label('departamento', 'Departamento') !!}
                    {!! Form::select('departamento', [], [], ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">                    
                    {!! Form::label('categoria_ocupacional', 'Categoria ocupacional') !!}
                    {!! Form::select('categoria_ocupacional', [
                        ' '            => 'Seleccione',
                        'directivo'   => 'Directivo',
                        'asesor'      => 'Asesor',
                        'ejecutivo'   => 'Ejecutivo',
                        'profesional' => 'Profesional',
                        'tecnico'     => 'Técnico',
                        'asistencial' => 'Asistencial'
                        ], ' ', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">                    
                    {!! Form::label('tipo_trabajador', 'Tipo de trabajador') !!}
                    {!! Form::select('tipo_trabajador', [
                        ' '               => 'Seleccione',
                        'operativo'      => 'Operativo',
                        'administrativo' => 'Administrativo',
                        'tripulante'     => 'Tripulante'
                        ], ' ', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">                    
                    {!! Form::label('condicion_laboral', 'Condición laboral') !!}
                    {!! Form::select('condicion_laboral', [
                        ' '          => 'Seleccione',
                        'contratado' => 'Contratado',
                        'suplente'   => 'Suplente',
                        'fijo'       => 'Fijo'                                            
                        ], ' ', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">                    
                    {!! Form::label('tipo_horario', 'Tipo de horario') !!}
                    {!! Form::select('tipo_horario', [
                        ' '        => 'Seleccione',
                        'fijo'     => 'Fijo',
                        'rotativo' => 'Rotativo',                        
                        ], ' ', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('banco', 'Banco') !!}
                    <select name="banco" id="banco" class="form-control" @change="checkBanco" v-model="bancoSelected">
                        <option v-for="banco in bancos" :value="banco.banco">@{{ banco.banco }}</option>
                    </select>
                </div>                
            </div>
            <div class="col-md-9">
                {!! Form::label('cuenta_bancaria', 'Número de cuenta bancaria') !!}
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <input type="text" name="codigo_cuenta" id="codigo_cuenta" v-model="codigo_cuenta" size="4" readonly="readonly">
                        </span>
                    </div>
                    {!! Form::text('cuenta_bancaria', null, ['class' => 'form-control', 'maxlength' => 16]) !!}
                </div>
            </div>
        </div>
    </fieldset>

    <hr>

    <fieldset>
        <legend>Carga familiar</legend>
        <table class="table">
            <thead>
                <tr>                    
                    <th>Nombre y Apellido</th>
                    <th>Cedula</th>
                    <th>Fecha Nac.</th>
                    <th>Género</th>
                    <th>Parentesco</th>
                    <th>Edad</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </fieldset>

{!! Form::close() !!}
