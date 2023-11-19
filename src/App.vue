<template>
  <div>
    <!-- <nav>
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </nav> --><router-view/>

  </div>
  
</template>

<style>
body{
  background-color: #007BFF;
  background-image: url('https://c.animaapp.com/GEg0wu0Z/img/vector-1.svg');
  background-size: cover; /* Ajusta el tamaño de la imagen al contenedor */
  background-repeat: no-repeat;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: black;
}

nav {
  padding: 30px;
}

nav a {
  /* font-weight: bold; */
  /* color: #2c3e50; */
  color: #fff;
  text-decoration: none;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
