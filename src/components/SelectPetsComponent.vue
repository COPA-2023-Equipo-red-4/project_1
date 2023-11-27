<template>
    <div class="container">
        <div class="row justify-content-center pt-4">
            <div class="col-md-3">
                <h4>Que especie buscan</h4>
                <select v-model="especieSeleccionada" class="form-select mb-4" aria-label="Default select example">
                    <option disabled value="">Selecciona la especie</option>
                    <option value="1">Canino</option>
                    <option value="2">Felino</option>
                    <option value="3">Ave</option>
                    <option value="4">Roedor</option>
                    <option value="5">Reptil</option>
                </select>
            </div>
            <div>
                <button type="button" class="btn btn-warning" @click="filtrarPorEspecie">Filtrar</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SelectPetsComponent',

    data() {
        return {
            especieSeleccionada: '', // Especie seleccionada por el usuario
        };
    },

    methods: {
        filtrarPorEspecie() {
            // Llamar a la función para filtrar en el componente padre
            this.$emit('filtrar-por-especie', this.especieSeleccionada);
        },
    },
};
</script>


<style scoped></style>