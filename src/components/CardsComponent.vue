<template>
  <div class="container mx-auto mt-4">
    <div class="flex row">
      <div class="row-md-6" v-for="mascota in mascotas" :key="mascota.id">
        <div class="card">
          <img src="/" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">nombre</h5>
            <h6 class="card-subtitle mb-2">raza</h6>
            <p class="card-text">descripcion</p>
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

  props: {
    mascota: {
      type: Object,

      methods: {

      }

    }
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