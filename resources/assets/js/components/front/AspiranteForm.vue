<template>
  <div class="row">
    <div class="col-12">
      <a href="#" class="btn btn-success" @click="btnAspiranteForm = !btnAspiranteForm">Postularme al cargo</a>
    </div>
    <div class="col-md-6 offset-md-3" v-show="btnAspiranteForm">
      <div id="aspiranteForm" class="aspirante-frm py-5">
        <header class="header-form d-flex">
          <img src="http://via.placeholder.com/64x64" alt="avca logo" class="header-form__img">
          <div class="header-form__text ml-3">
            <h4>Alas de Venezuela</h4>
            <h5>Registro de aspirantes</h5>
          </div>
        </header>
        <hr>
        <form action="#">
          <fieldset>
            <legend>Datos personales</legend>
            <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
              <label for="lastname">Apellido</label>
              <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Ingrese su apellido">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="cedula">Documento de identidad</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <select name="nacioanlidad" id="nacionalidad" class="form-control">
                        <option value="v">V</option>
                        <option value="e">E</option>
                      </select>
                    </div>
                    <input type="text" name="cedula" id="cedula" class="form-control" pattern="[0-9]" maxlength="8" placeholder="Ingrese su cédula">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                <div class="input-group">
                  <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>
                <span class="mr-3">Sexo:</span>
                <input type="radio" name="sexo" value="f"> F
                <input type="radio" name="sexo" value="m"> M
              </label>
            </div>
          </fieldset>
          <hr>
          <fieldset>
            <legend>Datos de contacto</legend>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telefono_fijo">Teléfono fijo</label>
                  <input type="tel" name="telefono_fijo" id="telefono_fijo" class="form-control" placeholder="Ingrese su teléfono fijo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telefono_movil">Teléfono móvil</label>
                  <input type="tel" name="telefono_movil" id="telefono_movil" class="form-control" placeholder="Ingrese su teléfono movil">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Correo electrónico</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su correo electrónico">
            </div>
          </fieldset>
          <hr>
          <fieldset>
            <div class="form-group">
              <label for="resumen_curricular">Resumen curricular <i class="far fa-file-pdf"></i></label>
              <input type="file" name="resumen_curricular" id="resumen_curricular" class="form-control-file">
            </div>
          </fieldset>

          <div class="form-group">
            <input type="submit" value="Enviar" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "AspiranteForm",
    data() {
      return {
        btnAspiranteForm: false
      }
    },
  }
</script>

<style scoped>

</style>