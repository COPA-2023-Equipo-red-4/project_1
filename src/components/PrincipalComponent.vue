<template>
    <div>
        <h1>¡Bienvenido! </h1>
        <div class="principal">
        </div>
    </div>

<h1>Estas buscando adoptar o donar una mascota?</h1>
<div class="container text-center">
    <div class="row justify-content-evenly">
        <div class="col-4">
        <button @click="QuieroAdoptar()"> QUIERO ADOPTAR </button>
        </div> 
        <div class="col-4">
        <button @click="QuieroDonar()"> QUIERO DONAR </button>
        </div>    
            
    </div>    
</div>
</template>

<script>
export default {
    name: 'PrincipalComponent',
    methods: {
        QuieroAdoptar() {
            this.$router.push(`/pets`)
        },
        QuieroDonar() {
            this.$router.push(`/PetRegister`)
        }
    }
}


</script>

<style scoped>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    height: 100vh;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
}

h1 {
    text-align: center;
    margin-top: 30px;
}

.principal {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 20px;
    margin-top: 30px;
}

.principal>div {
    width: 100%;
    text-align: center;
    margin-bottom: 20px;

}

.principal>div>span {
    font-size: 40px;
    font-weight: bold;
}

section {
    margin: 10px;
}

section>a>img {
    max-width: 300px;
    height: auto;
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.6);
}

section>a:hover>img {
    transform: scale(1.09);
    box-shadow: 0px 0px 20px 7px rgba(0, 0, 0, 0.8);
}

button {
    display: block;
    width: 75%;
    margin: 10px auto;
    padding: 15px;
    background-color:   #219716;
    color: #fff;
    font-size: 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.5s;

}

button:hover {
    background-color: #0056b3;
}
</style>