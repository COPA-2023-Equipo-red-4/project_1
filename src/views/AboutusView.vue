<template>
  <div class="home vh-100">
    <NavBarComponent />
    <AboutusComponent />
  </div>
</template>

<script>
import NavBarComponent from "@/components/NavBarComponent.vue";
import AboutusComponent from "@/components/AboutusComponent.vue";
export default {
  name: "AboutusView",
  components: {
    NavBarComponent,
    AboutusComponent,
  },
};
</script>

<style scoped></style>
