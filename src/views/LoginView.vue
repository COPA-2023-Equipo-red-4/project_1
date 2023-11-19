<template>
    <div>
        <NavBarComponent/>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <LoginIdeasComponent/>
                </div>
                <div class="col-md-6">
                    <LoginFormComponent/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavBarComponent from '@/components/NavBarComponent.vue';
import LoginFormComponent from '@/components/LoginFormComponent.vue';
import LoginIdeasComponent from '@/components/LoginIdeasComponent.vue'
export default {
        name:'LoginView',
        components:{
            NavBarComponent,
            LoginFormComponent,
            LoginIdeasComponent
        }
    }
</script>

<style scoped>

</style>