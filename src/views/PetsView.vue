<template>
    <div>
        <NavBarComponent />
        <SelectPetsComponent></SelectPetsComponent>

        <div v-for="(card, index) in cards" :key="index">
            <div class="row">
                <div class="col">
                    <CardsComponent />
                </div>
                <div class="col">
                    <CardsComponent />
                </div>
                <div class="col">
                    <CardsComponent />
                </div>
                <div class="col">
                    <CardsComponent />
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
            cards: [
                { title: "Tarjeta 1", description: "Descripción de la Tarjeta 1" },
                { title: "Tarjeta 2", description: "Descripción de la Tarjeta 2" },
                { title: "Tarjeta 3", description: "Descripción de la Tarjeta 3" },
                // Agrega más datos de tarjetas según sea necesario
            ],
        };
    },
}
</script>

<style scoped></style>