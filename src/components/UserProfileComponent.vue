<template>
<div v-if="datos">
  <div v-for="d in datos" :key="d.id"></div>
          <h2 class="text-light text-start mt-5 mb-5 justify-content-center">
            {{ datos.nombres }}, bienvenido !
          </h2>

          <a class="btn btn-primary" href="/profiledetail" role="button"
            >Detalles > Actividad
          </a>

          <!-- Primera columna --> 
          <div class="row justify-content-evenly mb-3 mt-3">
            <div class="col-4">
              <div class="card py-3 mt-1">
                <img :src="`https://rafalopez.ar/img/img_users/3.jpg`"
                class="card-img-top rounded-circle w-50 h-auto mx-auto"
                alt="Foto de usuario"
                />
                <p class="card-text" v-if="datos">
                Dirección: {{ datos.domicilio }}
                Género: 
                Teléfono: {{ datos.telefono }}
                e-mail: {{datos.email}}
                pais: {{ datos.email }}
                </p>
            </div>
            </div>
          <!-- Segunda columna -->
            <div class="col-4">
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


  data() {
    return {
      datos: null,
    };
  },
      mounted() {
    // Llama a tu API para obtener los datos del usuario
    this.getUser();
    },

  methods: {
    getUser() {
            const requestOptions = {
                method: 'GET',
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors',
            };
            fetch("https://rafalopez.ar/v1/user/perfil", requestOptions)
                .then(res => res.json())
                .then(response => {
                  console.log('Respuesta de la API', response);
                  this.datos = response;
                })
                .catch(error => console.log("Error al obtener datos del usuario", error));
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
