

<template>
    <div>
        <NavBarComponent/>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <FormUserComponent/>
                </div>
            </div>
        </div>
    </div>
</template>



<script>

import NavBarComponent from '@/components/NavBarComponent.vue';
import FormUserComponent from '@/components/FormUserComponent.vue';



export default {
    name:'ProfileView',
    components:{
        NavBarComponent,
        FormUserComponent,
    }
}
</script>

<style scoped>

</style>