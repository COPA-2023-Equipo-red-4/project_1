<template>
    <div class="home">
            <NavBarComponent />
            <div class="container">
                <div class="row">
                    <div class="col-md-6 container">
                        <LoginFormComponent />
                    </div>
                    <div class="col-md-6 container">
                        <LoginIdeasComponent />
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
    name: 'LoginView',
    components: {
        NavBarComponent,
        LoginFormComponent,
        LoginIdeasComponent
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
    color: #fff;
    animation: textclip 20s linear infinite;
}

@keyframes textclip {
    to {
        background-position: 200% center;
    }
}
</style>