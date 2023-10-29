<template>
    <div>
        <NavBarComponent/>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <UserProfileComponent/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavBarComponent from '@/components/NavBarComponent.vue';
import UserProfileComponent from '@/components/UserProfileComponent.vue';

export default {
        name:'ProfileView',
        components:{
            NavBarComponent,
            UserProfileComponent,
        }
    }
</script>

<style scoped>

</style>