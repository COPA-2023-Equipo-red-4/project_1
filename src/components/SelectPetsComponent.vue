<template>
    <div class="container">
        <div class="row justify-content-center pt-4">
            <div class="col-md-3" v-for="index in 3" :key="index">
                <select class="form-select mb-4" aria-label="Default select example">
                    <option selected>Selecciona el atributo</option>
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>
                    <option value="3">Otros</option>
            </select>
            
            </div>            
            <div>
                <button type="button" class="btn btn-warning">Filtrar</button>
            </div>
        </div>   
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>

</style>