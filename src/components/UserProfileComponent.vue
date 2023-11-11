<template>
  <div>
    <div class="container">
      <div class="row">
        <h2 class="text-light text-start mt-5 mb-5 justify-content-center">
          {{ user.name }}, bienvenido !
        </h2>
        <a class="btn btn-primary" href="/profiledetail" role="button"
          >Detalles > Actividad
        </a>
        <!-- Primera columna -->
        <div
          class="col-md-6 justify-content-center align-items-start d-flex mb-3 mt-3 pt-5"
        >
          <div class="card py-3 mt-1" style="width: 18rem">
            <img
              :src="user.photo"
              class="card-img-top rounded-circle w-50 h-auto mx-auto"
              alt="Foto de usuario"
            />
            <hr class="w-50 h-auto mx-auto" />
            <div class="card-body">
              <router-link to="/profiledetail"
                ><h5 class="card-title">
                  {{ user.name }} {{ user.lastname }}
                </h5></router-link
              >
              <p class="card-text">
                Edad: {{ user.age }}<br />
                Dirección: {{ user.address }}<br />
                Género: {{ user.gender }}
              </p>
            </div>
          </div>
        </div>

        <!-- Segunda columna -->
        <div
          class="col-md-6 justify-content-center align-items-end d-flex mb-3 mt-3 pt-5"
        >
          <div class="card py-3 mt-1" style="width: 18rem">
            <div class="card-body">
              <p class="card-text">
                Teléfono: 3000000000000000 <br />
                e-mail: alexandraperez@gmail.com <br />
                Adopción: Perro <br />
                Fecha: 11-11-2023 <br />
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Aliquid suscipit adipisci quae ut blanditiis eius nemo doloribus
                animi dolorum, laboriosam, delectus temporibus, beatae laborum
                placeat ratione hic nisi itaque dolore.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import profilePhoto from "@/assets/foto-perfil.jpeg";
export default {
  name: "UserProfileComponent",
  props: {
    userData: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      user: {
        photo: profilePhoto,
        name: "Alexandra",
        lastname: "Pérez",
        age: 25,
        address: "Detalle de la dirección del usuario",
        gender: "Femenino",
      },
    };
  },

  methods: {},
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
