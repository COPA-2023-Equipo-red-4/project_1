<template>
    <div>
        <NavBarComponent/>
        <PetsBannerComponent/>
        <SelectPetsComponent></SelectPetsComponent>     
        <CardsComponent/>
        <PaginationComponent/>
    </div>
</template>

<script>
import NavBarComponent from '@/components/NavBarComponent.vue';
import PetsBannerComponent from '@/components/PetsBannerComponent.vue';
import SelectPetsComponent from '@/components/SelectPetsComponent.vue';
import CardsComponent from '@/components/CardsComponent.vue';
import PaginationComponent from '@/components/PaginationComponent.vue'
    export default {
        name: 'PetsView',
        components:{
            NavBarComponent,
            PetsBannerComponent,
            SelectPetsComponent,
            CardsComponent,
            PaginationComponent
        }
    }
</script>

<style scoped>

</style>