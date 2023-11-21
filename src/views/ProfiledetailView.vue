<template>
    <div>
        <NavBarComponent/>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ProfileDetailComponent/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavBarComponent from '@/components/NavBarComponent.vue';
import ProfileDetailComponent from '@/components/ProfileDetailComponent.vue';

export default {
        name:'ProfiledetailView',
        components:{
            NavBarComponent,
            ProfileDetailComponent,
        }
    }
</script>

<style scoped>

</style>