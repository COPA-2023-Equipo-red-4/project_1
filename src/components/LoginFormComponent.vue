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
                
            </div>
            <div class="d-grid gap-2 pb-5">
                <button class="btn btn-primary text-white rounded-pill"
                type="button" id="buttonUser" @click="sendLogin"> Inicia sesión
                </button>
                


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
            password: '',
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

                const cookies = response.headers.get('Set-Cookie');
                console.log('Cookies:', cookies);


                if (response.ok) {

                    return response.json();
                } else {

                    throw new Error('Error en la solicitud');
                }
            })
            .then(responseJson => {

                console.log('Response ', responseJson);


                this.$router.push('/profile');
            })
            .catch(error => console.error('Error:', error));
        },

        getUser() {
            const requestOptions = {
                method: 'GET',
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'
            };
            fetch("https://rafalopez.ar/v1/user/perfil", requestOptions)
                .then(response => {
                    // Imprimir las cookies de la respuesta

                    console.log(response);
                    return response.text();
                })
                .then(result => console.log(result))
                .catch(error => console.log('error', error));
        },

        isAuthenticated() {

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

