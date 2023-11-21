<template>
    <div>
        <NavBarComponent/>
        <SelectPetsComponent></SelectPetsComponent>     
        <CardsComponent/>
    </div>
</template>

<script>
import NavBarComponent from '@/components/NavBarComponent.vue';
import SelectPetsComponent from '@/components/SelectPetsComponent.vue';
import CardsComponent from '@/components/CardsComponent.vue';
    export default {
        name: 'PetsView',
        components:{
            NavBarComponent,
            SelectPetsComponent,
            CardsComponent,
        }
    }
</script>

<style scoped>

</style>