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
                <button id="boton_adoptar" @mouseover="showImg()" @mouseleave="hideImg()" @click="QuieroAdoptar()"> QUIERO ADOPTAR </button>
                <img v-if="imgVisible" ref="../assets/envelope-fill.svg">
            </div>
            <div class="col-4">
                <button id="boton_donar" class="donarSvg" @click="QuieroDonar()"> QUIERO DONAR </button>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'PrincipalComponent',

    data() {
        return {
            imgVisible: false,
        }
    },

    methods: {
        QuieroAdoptar() {
            this.$router.push(`/pets`)
        },
        QuieroDonar() {
            this.$router.push(`/PetRegister`)
        },
        showImg() {
            this.imgVisible = true;
        },
        hideImg() {
            this.imgVisible = false;
        },
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
/* Añadir transición para el cambio suave */
button,
img {
    transition: opacity 0.3s ease-in-out;
    
}

/* Ocultar el SVG por defecto */
img {
    opacity: 0;
}

/* Mostrar el SVG cuando está visible */
img.visible {
    opacity: 1;
}

h1 {
    text-align: center;
    margin-top: 30px;
    font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    line-height: 2.9rem;
    letter-spacing: 0.4rem;
    -webkit-background-clip: text;
    background-clip: text;
    margin-bottom: 2.5rem;
    text-transform: uppercase;

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
    background-color: #219716;
    color: #fff;
    font-size: 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.5s;
    box-shadow: 0 0.1875rem 0.1875rem 0 rgba(0, 0, 0, 0.1) !important;
    padding: 1.25rem 2rem;
    font-family: "Varela Round", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 80%;
    text-transform: uppercase;
    letter-spacing: 0.15rem;

}

#boton_adoptar:hover {
    background-color: #008fb3;
}

#boton_donar:hover {
    background-color: #98b300;
    color: #000;


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

    H1 {
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

}
</style>