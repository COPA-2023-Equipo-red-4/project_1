<template>
    <h3 class="login-heading mb-4">Bienvenido! Ingresa los datos de tu mascota</h3>

    <div class="container text-center">
        <div class="row justify-content-evenly">
            <div class="col-4">
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres" v-model="nombres" placeholder="nombre">
                        <label for="floatingInput">Nombre</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="telefono" placeholder="telefono" v-model="telefono">
                        <label for="floatingInput">Especie</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="telefono" placeholder="telefono" v-model="telefono">
                        <label for="floatingInput">Raza</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fecha_nacimiento" placeholder="fechaDeNacimiento"
                            v-model="fecha_nacimiento">
                        <label for="floatingInput">Fecha de nacimiento</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="domicilio" placeholder="domicilio" v-model="domicilio">
                        <label for="floatingInput">Descripción</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ciudad" placeholder="ciudad" v-model="ciudad">
                        <label for="floatingInput">Observaciones</label>
                    </div>
                </form>
            </div>

            <div class="col-4">
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pais" placeholder="pais" v-model="pais">
                        <label for="floatingInput">pais</label>
                    </div>

                    <h4>Indica el sexo de tu mascota</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" v-model="sexo" value="F">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Hembra
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" v-model="sexo" value="M">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Macho
                        </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" v-model="email">
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto</label>
                        <input class="form-control" type="file" @change="handleFileChange">
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" v-model="pass">
                        <label for="floatingPassword">Contraseña</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" placeholder="confirmar contraseña"
                            v-model="confirmPassword">
                        <label for="floatingPassword">Confirmar contraseña</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                        <label class="form-check-label" for="rememberPasswordCheck">
                            Recuerda contraseña
                        </label>
                    </div>
                </form>
            </div>
        </div>


        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="button" @click="submitForm">
            Guardar </button>
        <div class="text-center">
            <a class="small" href="#">Olvidaste tu contraseña?</a>
        </div>






    </div>
</template>

<script>
export default {
    name: "FormPetComponent",
    data() {
        return {
            // Inicializa las propiedades del formulario
            nombres: '',
            apellido: '',
            email: '',
            telefono: '',
            pass: '',
            confirmPassword: '',
            fecha_nacimiento: '',
            domicilio: '',
            ciudad: '',
            pais: '',
            sexo: 'Elige tu sexo',
            genero: 'Elige tu genero',
            foto: '',
        };
    },

    methods: {
        submitForm() {
            console.log('en submitform');
            const formdata = new FormData();
            formdata.append("nombres", this.nombres);
            formdata.append("pass", this.pass);
            formdata.append("email", this.email);
            formdata.append("telefono", this.telefono);
            formdata.append("fecha_nacimiento", this.fecha_nacimiento);
            formdata.append("domicilio", this.domicilio);
            formdata.append("ciudad", this.ciudad);
            formdata.append("pais", this.pais);
            formdata.append("sexo", this.sexo);
            formdata.append("genero", this.genero);
            formdata.append("foto", this.foto);


            const requestOptions = {
                method: 'POST',
                body: formdata,
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'

            }
            fetch("https://rafalopez.ar/v1/user/create", requestOptions)
                .then(response => {

                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Error en la solicitud');
                    }
                })
                .then(responseJson => {
                    console.log('Response ', responseJson);
                    // this.$router.push('/profile');
                })
                .catch(error => console.error('Error:', error));
        },

        handleFileChange(event) {
            this.foto = event.target.files[0];
        },



    }
}
</script>

<style scoped>
.login {
    min-height: 100vh;
}

.bg-image {
    background-image: url('../assets/cutedog_form_registro.jpg');
    background-size: cover;
    background-position: center;
}

.login-heading {
    font-weight: 300;
}

.btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
}
</style>