<template>
    <div>
        <div class="home">
            <NavBarComponent />
            <SelectPetsComponent></SelectPetsComponent>
                <div class="row">
                    <div class="col">
                        <CardsComponent v-for="mascota in mascotas" :key="mascota.id" :mascota="mascota"/>
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
            mascotas: [],
        };
    },
    mounted() {
        // Iniciar el bucle para obtener mascotas con diferentes IDs
        this.getMascotas();
        },

    methods: {
        getMascotas(id) {
            const requestOptions = {
                method: 'GET',
                credentials: 'include',
                redirect: 'follow',
                mode: 'cors'
            };
            fetch(`https://rafalopez.ar/v1/mascota/get/${id}`, requestOptions)
                .then(response => {
                    // Imprimir las cookies de la respuesta
                    console.log(response);
                    return response.json();
                })
                .then(data => {
                    this.mascotas = data
                    console.log(data)
                })
                .catch(error => console.log(`Error al obtener mascota con ID ${id}:`, error));
        },
    }
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