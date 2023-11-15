<template>
    <div class=" pt-5">
        <form class="bg-white px-3 rounded flex">
            <div class="d-flex flex-column justify-content-center mb-4  "> <img src="../assets/logo-no-bg.png" alt="logo sin bg"> </div>
            <div class="mb-3" >
                <label for="exampleInputEmail1" class="form-label d-flex" id="email">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    v-model="email">
                <div id="emailHelp" class="form-text">Nunca compartiremos tu email con nadie más.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label d-flex" id="text-contrasena">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" v-model="password">
            </div>
            <div class="pb-5">
                <p class="text-start">
                    <a class="text-black fw-semibold" href="">¿Olvidaste tu contraseña? </a>
                </p>
                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
            </div>
            <div class="d-grid gap-2 pb-5">
                <button class="btn btn-primary text-white rounded-pill"
                type="button" id="buttonUser" @click="getUser"> Logueate </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: 'LoginFormComponent',




    data() {
        return {
            email: '',
            password: ''
        };
    },

    methods: {


        sendLogin() {
            const formdata = new FormData();
            formdata.append("user", this.email);
            formdata.append("pass", this.password);

            const requestOptions = {
                method: 'POST',
                body: formdata,
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'
            }
            fetch("https://rafalopez.ar/v1/user/login", requestOptions)
                .then(response => {
                    // Imprimir las cookies de la respuesta
                    console.log('Cookies de la respuesta:', response.headers);
                    return response.text();
                })
                .then(result => console.log(result))
                .catch(error => console.log('error', error));
        },

        getUser() {
            const requestOptions = {
                method: 'GET',
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'
            };
            fetch("https://rafalopez.ar/v1/user/login", requestOptions)
                .then(response => {
                    // Imprimir las cookies de la respuesta

                    console.log(response);
                    return response.text();
                })
                .then(result => console.log(result))
                .catch(error => console.log('error', error));
        }
    }
};
</script>

<style scoped>
a {
    text-decoration: none;
}

#text-contrasena {
    margin-bottom: 0%;
    margin-top: 20px;
}
#email {
    margin-bottom: 0%;
}
.text-start {
    font-size: small;
}
</style>
