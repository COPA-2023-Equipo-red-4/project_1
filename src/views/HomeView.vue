<template>
  <div class="home vh-100">
    <!-- <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/> -->
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
