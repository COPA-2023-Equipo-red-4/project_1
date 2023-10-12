<template>
    <div class=" pt-5">
        <form class="bg-white p-4 rounded">
            <h3 class="text-start">Logueate</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contrasena</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 pb-5">
        <p class="text-start">
            <a class="text-black fw-bold" href="">¿La Olvidaste? </a>
        </p>
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  </div>
    <div class="d-grid gap-2 pb-5">
    <button class="btn btn-warning text-white rounded-pill" type="button">Button</button>
    
    </div>
</form>
    </div>
</template>

<script>
    export default {
        name:'LoginFormComponent'
    }
</script>

<style scoped>

    a{
        text-decoration: none;
    }
</style>