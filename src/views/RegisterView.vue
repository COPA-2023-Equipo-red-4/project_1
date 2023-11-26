

<template>
    <div class="">
    <div class="home">
        <NavBarComponent />
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <FormUserComponent />
                </div>
            </div>
        </div>
    </div>
</div>
</template>



<script>

import NavBarComponent from '@/components/NavBarComponent.vue';
import FormUserComponent from '@/components/FormUserComponent.vue';



export default {
    name: 'ProfileView',
    components: {
        NavBarComponent,
        FormUserComponent,
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