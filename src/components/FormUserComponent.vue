<template>
<div class="container">
<br>

<div class="card bg-light flex justify-content-center">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Crea una cuenta</h4>
	<p class="text-center">Crea una cuenta gratis</p>

	<form>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/person-fill.svg" alt="icon-person"> </span>
		</div>
        <input name="" class="form-control" placeholder="Nombre" type="text"> 
    </div>

    <div class="form-group input-group">
		<div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/person-fill.svg" alt="icon-person"> </span>
		</div>
        <input name="" class="form-control" placeholder="Apellido" type="text"> 
    </div>

    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/envelope-fill.svg" alt="icon-person"> </span>
		</div>
        <input name="" class="form-control" placeholder="Dirección de email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/telephone-fill.svg" alt="icon-person"> </span>
		</div>
    <input name="" class="form-control" placeholder="Número de teléfono" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/key-fill.svg" alt="icon-person"> </span>
		</div>
        <input class="form-control" placeholder="Crear contraseña" type="password">

    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/key-fill.svg" alt="icon-person"> </span>
		</div>
        <input class="form-control" placeholder="Repetir contraseña" type="password">

    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/key-fill.svg" alt="icon-person"> </span>
		</div>
        <input class="form-control" placeholder="Fecha de nacimiento" type="date">

    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/key-fill.svg" alt="icon-person"> </span>
		</div>
        <input class="form-control" placeholder="Domicilio" type="text">

    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <img src="../assets/key-fill.svg" alt="icon-person"> </span>
		</div>
        <input class="form-control" placeholder="Ciudad" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    <select class="form-select" aria-label="Default select example">
        <option selected>Elige tu sexo</option>
        <option value="1">M</option>
        <option value="2">F</option>
        </select>
    </div>             

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Crea una cuenta  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Ya tienes una cuenta?
        <a class="nav-link" href="#">
            <router-link to="/login">Log In</router-link>
        </a>
    </p>                                                                 
    </form>
</article>


</div> <!-- card.// -->

</div> 

</template>

<script>
    export default {
        
    }
</script>

<style scoped>


</style>