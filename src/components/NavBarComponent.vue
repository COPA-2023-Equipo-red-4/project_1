<template>
  <nav class="navbar navbar-expand-md bg-success bg-gradient">
    <div class="container-fluid">
      <nav class="p-0">
        <div class="pe-100px">
          <img src="../assets/logo-no-bg.png" alt="logo sin bg" class="logo">
        </div>
      </nav>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="/">
              <font-awesome-icon icon="fa-solid fa-hand" />
              <router-link to="/about" class="link-hover">Acerca del proyecto</router-link>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">
              <font-awesome-icon icon="fa-solid fa-house" />
              <router-link to="/home" class="link-hover">Home</router-link>
            </a>
          </li>
          <li class="nav-item" v-if="isAuthenticated">
            <a class="nav-link" href="/">
              <font-awesome-icon icon="fa-solid fa-paw" />
              <router-link to="/pets" class="link-hover">Mascotas</router-link>
            </a>
          </li>
          <li class="nav-item" v-if="isAuthenticated" >
            <a class="nav-link" href="/">
              <font-awesome-icon icon="fa-solid fa-person" />
              <router-link to="/Profile" class="link-hover" >Mi Perfil</router-link>
            </a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          
          <li class="nav-item">

            

            <router-link to="/login" class="link-hover" v-if="isAuthenticated" @click="Logout"> Logout</router-link>

            <router-link to="/login" class="link-hover" v-else >Login</router-link>
            
            <router-link to="/register" class="link-hover" v-if="!isAuthenticated" >Registrate</router-link>

          </li>
        </form>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'NavBarComponent',



  data() {
    return {
      email: '',
      password: '',
      usuarioAutenticado: false,
    };
  },
  computed: {
    isAuthenticated() {
      // Utiliza el getter para obtener el estado de autenticación
      return this.$store.getters.isAuthenticated;
    },
  },

  methods: {

      Logout() {
            const requestOptions = {
                method: 'GET',
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'
            };
            fetch("https://rafalopez.ar/v1/user/logout", requestOptions)
                .then(response => {
                    // Imprimir las cookies de la respuesta
                    
                    console.log(response);
                    this.$store.commit('setUser', null)
                    return response.text();
                    
                })
                .then(result => console.log(result))
                .catch(error => console.log('error', error));
        },
    },
    logout() {
      // Lógica de cierre de sesión aquí
      // Después de cerrar sesión, establece usuarioAutenticado en false
      this.usuarioAutenticado = false;
    },



  }



</script>

<style scoped>
.logo {
  background: none;
  width: 140px;
  height: 50px;
  margin-right: 15px;
}
.logo:hover {
  background-image: '../assets/envelope-fill.svg';
}

.link-hover {
  margin-right: 5px;
  margin-left: 5px;
}

.link-hover:hover {
  color: black;
}

.nav {
  margin-right: 20px;
}

li {
  list-style: none;
}

</style>