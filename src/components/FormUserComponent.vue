<template>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Bienvenido!</h3>

                                <!-- Sign In Form -->
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nombres" v-model="nombres"
                                            placeholder="nombre" required>
                                        <label for="floatingInput">Nombre</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="apellidos" placeholder="apellido"
                                            v-model="apellidos" required>
                                        <label for="floatingInput">Apellido</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="telefono" placeholder="telefono"
                                            v-model="telefono">
                                        <label for="floatingInput">Telefono</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha_nacimiento"
                                            placeholder="fechaDeNacimiento" v-model="fecha_nacimiento" required>
                                        <label for="floatingInput">Fecha de nacimiento</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="domicilio" placeholder="domicilio"
                                            v-model="domicilio" required>
                                        <label for="floatingInput">Domicilio</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="ciudad" placeholder="ciudad"
                                            v-model="ciudad" required>
                                        <label for="floatingInput">Ciudad</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="pais" placeholder="pais" v-model="pais"
                                            required>
                                        <label for="floatingInput">pais</label>
                                    </div>


                                    <h4>Indica tu sexo</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="Masculino" v-model="sexo"
                                            value="M">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="Femenino" v-model="sexo" value="F">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Femenino
                                        </label>
                                    </div>

                                    <h4>Indica tu Género</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="Masculino" v-model="sexo"
                                            value="M">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="Femenino" v-model="sexo" value="F">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Femenino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="Otros" v-model="sexo" value="X">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Otros
                                        </label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com"
                                            v-model="email" required>
                                        <label for="floatingInput">Email</label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Foto</label>
                                        <input class="form-control" type="file" id="formFile" v-on:change="foto">
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Contraseña" v-model="password" required>
                                        <label for="floatingPassword">Contraseña</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="confirmar contraseña" v-model="confirmPassword" required>
                                        <label for="floatingPassword">Confirmar contraseña</label>
                                    </div>

                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                        <label class="form-check-label" for="rememberPasswordCheck">
                                            Recuerda contraseña
                                        </label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2"
                                            type="submit">Registrate</button>
                                        <div class="text-center">
                                            <a class="small" href="#">Olvidaste tu contraseña?</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FormUserComponent",

    methods: {
        submitForm() {
            // Aquí puedes enviar los datos del formulario a tu API
            const formData = {
                nombre: this.nombre,
                apellido: this.apellido,
                email: this.email,
                telefono: this.telefono,
                password: this.password,
                confirmPassword: this.confirmPassword,
                fechaNacimiento: this.fechaNacimiento,
                domicilio: this.domicilio,
                ciudad: this.ciudad,
                sexo: this.sexo,
                genero: this.genero,
            };

            const requestOptions = {
                method: 'POST',
                body: formData,
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'

            }
            fetch("https://rafalopez.ar/v1/user/create", requestOptions)
                .then(response => {
                    const cookies = response.headers.get('Set-Cookie');
                    console.log('Cookies:', cookies)

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