<template>
  <div>
    <div class="container">
      <div class="row">
          <h2 class="text-light text-start mt-5 mb-5 justify-content-center">
            {{ userData.nombres }}, bienvenido !
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
                src="../assets/foto-perfil.jpeg"
                class="card-img-top rounded-circle w-50 h-auto mx-auto"
                alt="Foto de usuario"
              />
              <hr class="w-50 h-auto mx-auto" />
              
              <div class="card-body">
                <router-link to="/profiledetail">
                  <h5 class="card-title">
                    {{ userData.nombres }}
                    <h5>{{ userData.apellido }}</h5>
                  </h5></router-link>

              <p class="card-text">
                Dirección:
                Género:
                Teléfono:
                e-mail:
                pais: 
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
export default {
  name: "UserProfileComponent",
  data() {
    return {
      userData: ' ',
    };
  },
  mounted() {
    // Llama al método getUser cuando el componente se monta
    this.getUser();
  },
  methods: {
    getUser() {
            const requestOptions = {
                method: 'GET',
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'
            };
            fetch("/v1/user/perfil", requestOptions)
                .then(response => {
                    // Imprimir las cookies de la respuesta
                    console.log(response.headers);
                    return response.json;
                })
                // Almacena los datos del usuario en la propiedad userData
                .then(console.log(this.userData))
                .catch(error => console.log("error", error));
        }
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
