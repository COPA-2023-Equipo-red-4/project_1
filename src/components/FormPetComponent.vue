<template>
    <h3 class="login-heading mb-4">Bienvenido! Ingresa los datos de tu mascota</h3>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombres" v-model="nombre" placeholder="nombre">
                        <label for="floatingInput">Nombre</label>
                    </div>

                    <select class="form-select mb-3" v-model="id_especie">
                        <option disabled value="">Por favor elige una especie</option>
                        <option value="1">Perro</option>
                        <option value="2">Gato</option>
                        <option value="3">Ave</option>
                        <option value="4">Roedor</option>
                        <option value="5">Reptil</option>
                        <option value="6">Otros</option>
                    </select>

                    <select class="form-select mb-3" v-model="id_raza">
                        <option disabled value="">Por favor elige una raza</option>
                        <option value="1">Angora</option>
                        <option value="2">Siames</option>
                        <option value="3">Egipcio</option>
                        <option value="4">Persa</option>
                        <option value="5">Gato</option>
                        <option value="6">Labrador</option>
                        <option value="7">Pastor Alemán</option>
                        <option value="8">Boa</option>
                        <option value="9">Otras razas</option>
                    </select>

                    <select class="form-select mb-3" v-model="id_color">
                        <option disabled value="">Por favor elige un color</option>
                        <option value="1">Blanco</option>
                        <option value="2">Negro</option>
                        <option value="3">Marrón</option>
                        <option value="4">Dorado</option>
                        <option value="5">Atigrado</option>
                        <option value="6">Otro color</option>
                    </select>



                </form>
            </div>

            <div class="col">
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="ciudad" placeholder="ciudad" v-model="descripcion">
                        <label for="floatingInput">Descripcion del animal</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pais" placeholder="pais" v-model="observaciones">
                        <label for="floatingInput">Observaciones</label>
                    </div>

                    <h4 class="mb-3">Indica el sexo de tu mascota</h4>
                    <div class="form-check mb-3">
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

                    <select class="form-select mb-3" v-model="tamanios">
                        <option disabled value="">Por favor elige un tamaño</option>
                        <option value="1">Pequeño</option>
                        <option value="2">Mediano</option>
                        <option value="3">Mediano-Grande</option>
                        <option value="4">Grande</option>
                        <option value="5">Muy grande</option>
                    </select>

                    <h4>¿Se encuentra castrado?</h4>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" v-model="castrado" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Si
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" v-model="castrado" value="0">
                        <label class="form-check-label" for="flexRadioDefault2  ">
                            No
                        </label>
                    </div>
                </form>
            </div>

            <div class="col">
                <form>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fecha_nacimiento" required
                            placeholder="fechaDeNacimiento" v-model="fecha_nacimiento">
                        <label for="floatingInput">Fecha de nacimiento</label>
                    </div>



                <select class="form-select mb-3" v-model="id_sociabilidad">
                    <option disabled value="">Por favor elige una opción</option>
                    <option value="1">Amigable</option>
                    <option value="2">Jugueton</option>
                    <option value="3">Docil</option>
                    <option value="4">Sociable con misma especie</option>
                </select>
                </form>

                <div class="container">
                <div class="row">
                    <h4 class="mb-3"> Pon unas fotos de tu mascota</h4>
                    <div class="mb-3 col-md-3">

                        <label for="formFile" class="form-label" id="0">Foto 1</label>
                        <input class="form-control" type="file" @change="handleFileChange($event, 1)">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="formFile" class="form-label" id="1">Foto 2</label>
                        <input class="form-control" type="file" @change="handleFileChange($event, 2)">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="formFile" class="form-label" id="2">Foto 3</label>
                        <input class="form-control" type="file" @change="handleFileChange($event, 3)">
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="formFile" class="form-label" id="3">Foto 4</label>
                        <input class="form-control" type="file" @change="handleFileChange($event, 4)">
                    </div>
                </div>
            </div>

            </div>


            
            <!-- ... -->



        </div>


        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="button" @click="submitForm">
            Guardar </button>





    </div>
</template>

<script>


export default {
    name: "FormPetComponent",
    data() {
        return {
            // Inicializa las propiedades del formulario
            nombre: '',
            id_especie: '',
            id_raza: '',
            id_color: '',
            fecha_nacimiento: '',
            descripcion: '',
            observaciones: '',
            sexo: '',
            id_tamanio: '',
            castrado: '',
            id_sociabilidad: '',
            fotos: [],
        };
    },

    methods: {
        submitForm() {
            console.log('en submitform');
            const formdata = new FormData();
            formdata.append("nombre", this.nombre);
            formdata.append("id_especie", this.id_especie);
            formdata.append("id_raza", this.id_raza);
            formdata.append("id_color", this.id_color);
            formdata.append("fecha_nacimiento", this.fecha_nacimiento);
            formdata.append("descripcion", this.descripcion);
            formdata.append("observaciones", this.observaciones);
            formdata.append("sexo", this.sexo);
            formdata.append("id_tamanio", this.tamanios);
            formdata.append("castrado", this.castrado);
            formdata.append("id_sociabilidad", this.id_sociabilidad);

            // Iterar sobre las fotos y agregarlas al FormData
            this.fotos.forEach((foto, index) => {
                formdata.append(`fotos[${index}]`, foto);
            });

            const requestOptions = {
                method: 'POST',
                body: formdata,
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'
            }

            fetch("https://rafalopez.ar/v1/mascota/register", requestOptions)
                .then(response => {
                    if (response.ok) {
                        return response.text();
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

        handleFileChange(event, id_foto) {
            // Añadir manejo de errores si se desea
            try {
                const foto = event.target.files[0];
                this.fotos[id_foto - 1] = foto;
                console.log(`Archivo ${id_foto} seleccionado:`, foto);
            } catch (error) {
                console.error("Error al manejar el cambio de archivo:", error);
            }
        }


    }
}
</script>

<style scoped>
.login-heading {
    font-weight: 300;
}

.btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
}
</style>
