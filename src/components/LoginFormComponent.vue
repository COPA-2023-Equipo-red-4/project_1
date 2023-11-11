<template>
    <div class=" pt-5">
        <form class="bg-white p-4 rounded">
            <h3 class="text-start">Logueate TEST remoto</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    v-model="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contrasena</label>
                <input type="text" class="form-control" id="exampleInputPassword1" v-model="password">
            </div>
            <div class="mb-3 pb-5">
                <p class="text-start">
                    <a class="text-black fw-bold" href="">¿La Olvidaste? </a>
                </p>
                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
            </div>
            <div class="d-grid gap-2 pb-5">
                <button class="btn btn-primary text-white rounded-pill" type="button" @click="sendLogin">Enviar</button>
                <button class="btn btn-primary text-white rounded-pill" type="button" id="buttonUser" @click="getUser">Ver
                    user (ver concola datos usuario login)</button>
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
            };

            // fetch("http://copa/v1/login", requestOptions)
            fetch("https://rafalopez.ar/v1/login", requestOptions)
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
            fetch("https://rafalopez.ar/v1/user", requestOptions)
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
</style>
