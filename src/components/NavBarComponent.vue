<template>

    <div id="navbar">

        <nav class="navbar navbar-expand-md bg-success bg-gradient" >
  <div class="container-fluid">
    <nav class="p-0">
      <div class="pe-50px">
        <img src="../assets/logo-no-bg.png" alt="logo sin bg" class="logo">
      </div>
    </nav>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="#">
            <router-link to="/">Inicio</router-link>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <router-link to="/about">Acerca del proyecto</router-link>
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <router-link to="/pets">Mascotas</router-link>
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <router-link to="/Profile">Mi Perfil</router-link>
        </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        
        <a class="nav-link" href="#">
            <router-link to="/login">Login</router-link>
        </a>
                
        <a class="nav-link" href="#">
            <router-link to="/register">Registrate</router-link>
        </a>
      </form>
    </div>
  </div>
</nav>

    </div>
</template>

<script>
    export default {
      name: 'NavBarComponent',   
      
      

    data() {
        return {
            email: '',
            password: '',
            isAuthenticated: false,
        };
    },

    methods: {
    
    
    }

  }

</script>

<style scoped>
.logo {
  background: none;
  width: 100px;
  height: 50px;
}
#navbar {
  display: contents;

}
</style>