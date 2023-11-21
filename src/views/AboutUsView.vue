<template>
    <div class="home vh-100">
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

<style scoped></style>