<template>
  <div class="home">
    <!-- <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/> -->
    <PrincipalComponent/>
  </div>
</template>

<script>
// @ is an alias to /src
// import HelloWorld from '@/components/HelloWorld.vue'
import PrincipalComponent from '@/components/PrincipalComponent.vue'

export default {
  name: 'HomeView',
  components: {
    PrincipalComponent
  }
}
</script>
