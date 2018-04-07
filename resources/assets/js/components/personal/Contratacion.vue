<template>
  <div class="card">
    <div class="card-header">
      <h2 class="form-title">Contratación</h2>
    </div>
    <div class="card-block">
      <form action="#">
        <fieldset>
          <legend>Datos personales</legend>
          <div class="row">
            <div class="col-md-3">
              <label for="fecha_ingreso">Fecha de ingreso</label>
              <div class="input-group">
                <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-9"></div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <label for="foto">Foto</label>
              <input type="file" name="foto" id="foto" class="form-control-file">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label for="fecha_nacimiento">Fecha de nacimiento</label>
              <div class="input-group">
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="genero">Género</label> <br>
                <input type="radio" name="genero" id="genero" value="femenino"> Femenino
                <input type="radio" name="genero" id="genero" value="masculino"> Masculino
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="estado_civil">Estado civil</label>
                <select name="estado_civil" id="estado_civil" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option value="solter@">Solter@</option>
                  <option value="casad@">Casad@</option>
                  <option value="concubinato">Concubinato</option>
                  <option value="divorciad@">Divorciad@</option>
                  <option value="viud@">Viud@</option>
                </select>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </fieldset>

        <!--Datos de direccion-->
        <fieldset>
          <legend>Datos de habitación</legend>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" id="estado" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <select name="ciudad" id="ciudad" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <label for="direccion">Dirección local</label>
              <div class="input-group">
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección local">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-location-arrow"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </fieldset>

        <!--Datos de contacto-->
        <fieldset>
          <legend>Datos de contacto</legend>
          <div class="row mb-3">
            <div class="col-md-3">
              <label for="telefono_fijo">Teléfono fijo</label>
              <div class="input-group">
                <input type="text" class="form-control" name="telefono_fijo" id="telefono_fijo" placeholder="Teléfono fijo">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-phone"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <label for="telefono_movil">Teléfono móvil</label>
              <div class="input-group">
                <input type="text" name="telefono_movil" id="telefono_movil" class="form-control" placeholder="Teléfono movil">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-mobile-alt"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="email">Correo electrónico</label>
              <div class="input-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="far fa-envelope"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="discapacidad">¿Posee alguna discapacidad?</label> <br>
                <input type="radio" name="discapacidad" id="discapacidad" value="si"> Si
                <input type="radio" name="discapacidad" id="discapacidad-no" value="no"> No
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select name="tipo_discapacidad" id="tipo_discapacidad" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
          </div>
        </fieldset>

        <!--Datos laborales-->
        <fieldset>
          <legend>Datos laborales</legend>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="sucursal">Sucursal</label>
                <select name="sucursal" id="sucursal" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="dependencia">Dependencia</label>
                <select name="dependencia" id="dependencia" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="cargo">Cargo</label>
                <select name="cargo" id="cargo" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nivel_academico">Nivel Académico</label>
                <select name="nivel_academico" id="nivel_academico" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="profesion">Profesión</label>
                <select name="profesion" id="profesion" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="condicion_laboral">Condición laboral</label>
                <select name="condicion_laboral" id="condicion_laboral" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option value="suplente">Suplente</option>
                  <option value="fijo">Fijo</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="tipo_horario">Tipo de horario</label>
                <select name="tipo_horario" id="tipo_horario" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                  <option value="fijo">Fijo</option>
                  <option value="rotativo">Rotativo</option>
                </select>
              </div>
            </div>
          </div>
        </fieldset>

        <!--Datos de nómina-->
        <fieldset>
          <legend>Datos de nómina</legend>
          <div class="row">
            <div class="col-md-2">
              <label for="nivel"><strong>Nivel</strong></label>
              Nivel
            </div>
            <div class="col-md-2">
              <label for="sueldo_base"><strong>Sueldo base</strong></label>
              Sueldo base
            </div>
            <div class="col-md-8"></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="banco">Banco</label>
                <select name="banco" id="banco" class="form-control">
                  <option value="" selected="selected">Seleccione</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="cuenta_bancaria">Número de cuenta bancaria</label>
                <input type="text" name="cuenta_bancaria" id="cuenta_bancaria" class="form-control" placeholder="Número de cuenta bancaria" maxlength="20">
              </div>
            </div>
          </div>
        </fieldset>

        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <button type="submit" class="btn btn-success">
                <i class="fas fa-check"></i> Guardar y generar contrato
              </button>
              <button type="reset" class="btn btn-danger">
                <i class="fas fa-eraser"></i> Cancelar
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="card-footer text-muted">
      Footer
    </div>
  </div>
</template>

<script>
  export default {
    name: "Contratacion"
  }
</script>

<style scoped>

</style>