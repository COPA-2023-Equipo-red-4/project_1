

<template>
    <div>
        <NavBarComponent/>
        <FormPetComponent/>

            
        
    </div>
</template>



<script>

import NavBarComponent from '@/components/NavBarComponent.vue';
import FormPetComponent from '@/components/FormPetComponent.vue';



export default {
    name:'ProfileView',
    components:{
        NavBarComponent,
        FormPetComponent,
    }
}
</script>

<style scoped>

</style>