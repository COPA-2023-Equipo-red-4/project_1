<template>
  <div v-if="datos">
    <div v-for="d in datos" :key="d.id"></div>
    <h2 class="text-light text-start mt-5 mb-5 justify-content-center">
      {{ datos.nombres }}, bienvenido!
    </h2>

    <a class="btn btn-primary" href="/profiledetail" role="button">Detalles > Actividad</a>

    <!-- Primera columna -->
    <div class="row justify-content-evenly mb-3 mt-3">
      <div class="col-5">
        <div class="card py-3 mt-1">
          <img :src="'https://rafalopez.ar' + datos.foto" class="card-img-top rounded-circle w-50 h-auto mx-auto"
            alt="Foto de usuario" />
          <p class="card-text" v-if="datos">
            Dirección: {{ datos.domicilio }}
            <br>
            Género:
            <br>
            Teléfono: {{ datos.telefono }}
            <br>
            e-mail: {{ datos.email }}
            <br>
            país: {{ datos.email }}
            <br>
          </p>
        </div>
      </div>
      <!-- Segunda columna -->
      <div class="col-5">
        <div class="card py-3 mt-1">
          <div class="card-body">
            <p class="card-text">
              Adopción: Perro <br />
              Fecha: 11-11-2023 <br />
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "UserProfileComponent",
  computed: {
    // Accede al estado del store y obtén el usuario
    datos() {
      return this.$store.state.user;
    },
  }
};
</script>

<style scoped>
a {
  text-decoration: none;
}

.card {
  background-color: #a3cfbb;
}
</style>
