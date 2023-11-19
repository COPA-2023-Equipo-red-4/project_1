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
                <img :src="`${buildImageUrl(datos.foto)}`"
                class="card-img-top rounded-circle w-50 h-auto mx-auto"
                alt="Foto de usuario"
                />
                <div class="card-text" v-if="datos">
                <lu>
                <li>Dirección: {{ datos.domicilio }} </li>
                <li> Género: </li> 
                <li> Teléfono: {{ datos.telefono }} </li>
                <li> e-mail: {{datos.email}} </li>
                <li> pais: {{ datos.email }} </li>
                </lu>
                </div>

            </div>
            </div>
          <!-- Segunda columna -->
            <div class="col-4">
              <div class="card py-3 mt-1">
              <div class="card-body">
              <p class="card-text">
                Adopción: Perro mastodonte<br />
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
        buildImageUrl(relativePath) {
      // Construir la URL completa de la imagen
      return `https://rafalopez.ar${relativePath}`;
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
