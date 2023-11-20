<template>
  <header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
      <div class="d-flex justify-content-center">
        <div class="text-center">
          <h1 :class="{ 'fade-in': true, 'active': fadeInActive } ">ADOPTAR ES  <span id="dynamic-word">{{ dynamicWord }}</span></h1>
          <h2 :class="{ 'fade-in': true, 'active': fadeInActive2 }">Se parte del cambio que el mundo animal necesita</h2>
          <div :class="{ 'fade-in': true, 'active': fadeInActive3 }"><a href=""><router-link to="/home" class="btn btn-primary">Empecemos!</router-link></a></div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'LandingComponent',
  data() {
    return {
      fadeInActive: false,
      fadeInActive2: false,
      fadeInActive3: false,
      dynamicWord: 'CUIDAR',
    };

    
  },

  mounted() {
    // Palabras que quieres que aparezcan en el h1
    const words = ['AMAR', 'QUERER', 'VIDA', 'CONECTAR'];

    // Agrega un pequeño retraso antes de activar la animación
    setTimeout(() => {
      this.fadeInActive = true;
    }, 600);
    setTimeout(() => {
      this.fadeInActive2 = true;
    }, 400);
    setTimeout(() => {
      this.fadeInActive3 = true;
    }, 200);

    // Elige una palabra aleatoria de la lista
    const randomIndex = Math.floor(Math.random() * words.length);
    this.dynamicWord = words[randomIndex];
  },  
      
}
</script>

<style scoped>
@charset "UTF-8";


@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}


button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}



button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}


button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {

  .container-sm,
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {

  .container-md,
  .container-sm,
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {

  .container-lg,
  .container-md,
  .container-sm,
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {

  .container-xl,
  .container-lg,
  .container-md,
  .container-sm,
  .container {
    max-width: 1140px;
  }
}

@media (min-width: 1400px) {

  .container-xxl,
  .container-xl,
  .container-lg,
  .container-md,
  .container-sm,
  .container {
    max-width: 1320px;
  }
}

.btn {
  box-shadow: 0 0.1875rem 0.1875rem 0 rgba(0, 0, 0, 0.1) !important;
  padding: 1.25rem 2rem;
  font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 80%;
  text-transform: uppercase;
  letter-spacing: 0.15rem;
  border: 0;
}
.masthead {
  position: relative;
  width: 100%;
  height: auto;
  min-height: 35rem;
  padding: 15rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url("../assets/cute_pets_background_landing.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}

.fade-in {
  color: aliceblue;
  text-align: center;
}

.masthead h1,
.masthead .h1 {
  font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 2.5rem;
  line-height: 2.5rem;
  letter-spacing: 0.8rem;
  background: linear-gradient(rgb(248, 245, 59), rgba(170, 140, 140, 0));
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
  margin-bottom: 2.5rem;
}

.masthead h2,
.masthead .h2 {
  font-size: 1rem;
}

@media (min-width: 768px) {

  .masthead h1,
  .masthead .h1 {
    font-size: 4rem;
    line-height: 4rem;
  }
}

@media (min-width: 992px) {
  .masthead {
    height: 100vh;
    padding: 0;
  }

  .masthead h1,
  .masthead .h1 {
    font-size: 6.5rem;
    line-height: 6.5rem;
    letter-spacing: 0.8rem;
  }

  .masthead h2,
  .masthead .h2 {
    font-size: 1.25rem;
  }
}

.fade-in {
  opacity: 0;
  transform: translateY(120px); /* Desliza hacia arriba 20px, puedes ajustar esto */
  transition: opacity 2s ease, transform 2.5s ease;
}

.fade-in.active {
  opacity: 1;
  transform: translateY(0);
}

</style>

