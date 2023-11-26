<template>
  <div class="home vh-100">

    <NavBarComponent/>
    <PrincipalComponent/>
  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'
import PrincipalComponent from '@/components/PrincipalComponent.vue'
import NavBarComponent from '@/components/NavBarComponent.vue';
export default {
  name: 'HomeView',
  components: {
    PrincipalComponent,
    NavBarComponent
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
    animation: textclip 20s linear infinite;
}

@keyframes textclip {
    to {
        background-position: 200% center;
    }
}

</style>