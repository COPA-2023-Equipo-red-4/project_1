<template>
    <div class="home">
        <NavBarComponent />
        <AboutUsComponent />
    </div>
</template>

<script>
import NavBarComponent from "@/components/NavBarComponent.vue";
import AboutUsComponent from "@/components/AboutUsComponent.vue";
export default {
    name: "AboutusView",
    components: {
        NavBarComponent,
        AboutUsComponent,
    },
};
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
    animation: textclip 20s linear infinite;
}

@keyframes textclip {
    to {
        background-position: 200% center;
    }
}
</style>