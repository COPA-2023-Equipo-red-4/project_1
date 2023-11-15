<template>
    <div>

        <nav class="navbar navbar-expand-lg bg-success bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="#">
            <router-link to="/">Inicio</router-link>
            </a><!-- <span class="sr-only">(current)</span> -->
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <router-link to="/about">Acerca</router-link>
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
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <a class="me-2 p-2" href="#">
            <router-link to="/login">Log In</router-link>
        </a>
        <button class="btn btn-warning rounded-pill text-light" type="submit">Empieza ya</button>
      </form>
    </div>
  </div>
</nav>

    </div>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>

</style>