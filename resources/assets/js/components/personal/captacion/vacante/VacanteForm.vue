<template>
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div v-if="response">
        <div class="alert alert-success">
          {{ response.message }}
        </div>
      </div>
      <form @submit.prevent="publicarVacante" id="vacanteForm">
        <fieldset>
          <legend>Publicar vacante</legend>
          <div class="form-group">
            <label for="sucursal">Sucursal</label>
            <select name="sucursal" id="sucursal" class="form-control">
              <option value="" selected="selected">Seleccione</option>
              <option :value="sucursal.id" v-for="sucursal in sucursales">{{ sucursal.nombre | capitalize }}</option>
            </select>
          </div>
          <div class="form-group">
            <label for="cargo">Cargo</label>
            <select name="cargo" id="cargo" class="form-control">
              <option value="" selected="selected">Seleccione</option>
              <option :value="cargo.id" v-for="cargo in cargos">{{ cargo.titulo | capitalize }}</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Publicar" class="btn btn-success">
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</template>

<script>
  export default {
    name: "VacanteForm",
    data() {
      return {
        sucursales: [],
        cargos: [],
        response: ''
      }
    },
    created() {
      this.obtenerSucursales();
      this.obtenerCargos();
    },
    methods: {
      obtenerSucursales() {
        axios.get('/obtener-sucursales')
          .then(response => {
            this.sucursales = response.data;
          })
          .catch(error => {
            console.log(error);
          });
      },
      obtenerCargos() {
        axios.get('/obtener-cargos')
          .then(response => {
            this.cargos = response.data;
          })
          .catch(error => {
            console.log(error);
          });
      },
      publicarVacante() {
        let form = document.getElementById('vacanteForm');
        let formData = new FormData(form);
        axios.post('publicar-vacante', formData)
          .then(response => {
            this.response = response.data;
          });
      }
    },
    filters: {
      capitalize: function (value) {
        if (!value) return '';
        value = value.toString();
        return value.charAt(0).toUpperCase() + value.slice(1);
      }
    }
  }
</script>

<style scoped>

</style>