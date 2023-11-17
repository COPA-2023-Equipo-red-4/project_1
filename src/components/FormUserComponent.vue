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
		<span class="input-group-text"> <i class="bi bi-person-fill"></i> </span>
		</div>
        <input name="" class="form-control" placeholder="Nombre" type="text"> 
    </div>

    <div class="form-group input-group">
		<div class="input-group-prepend">
		<span class="input-group-text"> <i class="bi bi-person-fill"></i> </span>
		</div>
        <input name="" class="form-control" placeholder="Apellido" type="text"> 
    </div>

    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		</div>
        <input name="" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    <input name="" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->                                      
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

.bi biperson-fill {

}

</style>