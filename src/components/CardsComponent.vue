<template>
  <div class="container mx-auto mt-4">
    <div class="flex row">
      <div class="row-md-6" v-for="mascota in mascotas" :key="mascota.id">
        <div class="card">
          <img :src="mascota.foto1" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ mascota.nombre }}</h5>
            <h6 class="card-subtitle mb-2">{{ mascota.raza }}</h6>
            <p class="card-text">{{ mascota.descripcion }}</p>
            <router-link :to="'/MascotaProfile/' + mascota.id" class="btn mr-2"> Ver mas</router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardsComponent",

  data() {
        return {
            mascotas: [],
        };
    },
    mounted() {

          this.getMascotas();
        },

    methods: {
        getMascotas() {
            const requestOptions = {
                method: 'GET',
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'
            };
            fetch(`https://rafalopez.ar/v1/mascota/list`, requestOptions)
                .then(response => {
                    // Imprimir las cookies de la respuesta
                    console.log(response);
                    return response.json();
                })
                .then(data => {
                    this.mascotas = data
                })
                .catch(error => console.log("Error al obtener mascota con ID", error));
        },
    }
}
</script>

<style scoped>
:root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
  background: #111 !important;
}

.card {
  width: 12rem;
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

img {
  max-height: 200px;
}

.btn {
  border: 5px solid;
  border-image-slice: 1;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source: var(--gradient) !important;
  text-decoration: none;
  transition: all .4s ease;
}

.btn:hover,
.btn:focus {
  background: var(--gradient) !important;
  -webkit-background-clip: none !important;
  -webkit-text-fill-color: #fff !important;
  border: 5px solid #fff !important;
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;
}
</style>