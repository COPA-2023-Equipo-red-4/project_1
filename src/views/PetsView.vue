<template>
    <div>
        <div class="home">
            <NavBarComponent />
            <SelectPetsComponent v-model="especieSeleccionada" @filtrar-por-especie="filtrarPorEspecie">
            </SelectPetsComponent>
            <div class="row">
                <div class="col">
                    <CardsComponent :mascotas="mascotasFiltradas" />
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import NavBarComponent from '@/components/NavBarComponent.vue';
import SelectPetsComponent from '@/components/SelectPetsComponent.vue';
import CardsComponent from '@/components/CardsComponent.vue';
export default {
    name: 'PetsView',
    components: {
        NavBarComponent,
        SelectPetsComponent,
        CardsComponent,
    },
    data() {
        return {
            especieSeleccionada: '', // Estado del filtro de especies
            mascotas: [], // Lista completa de mascotas
            mascotasFiltradas: [], // Lista de mascotas después de aplicar el filtro
        };
    },
    methods: {
        filtrarPorEspecie(especieSeleccionada) {
            // Actualiza el estado del filtro
            this.especieSeleccionada = especieSeleccionada;

            // Filtra las mascotas según la especie seleccionada
            this.mascotasFiltradas = this.mascotas.filter(mascota => mascota.especie === especieSeleccionada);
        },
    },

}
</script>

<style scoped>
.home {
    background-image: linear-gradient(90deg,
            #125a3c 0%,
            #105c7a 29%,
            #1381ff 67%,
            #125a3c 100%);
    background-clip: border-box;
    background-size: 200% auto;
    color: rgb(59, 59, 59);
    animation: textclip 20s linear infinite;
}

@keyframes textclip {
    to {
        background-position: 200% center;
    }
}
</style>