<template>
    <div class="home">
        <NavBarComponent />
        <MascotaProfileComponent />

    </div>
</template>

<script>
import NavBarComponent from '@/components/NavBarComponent.vue';
import MascotaProfileComponent from '@/components/MascotaProfileComponent.vue';

export default {
    name: 'MascotaDetailView',
    components: {
        NavBarComponent,
        MascotaProfileComponent,
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