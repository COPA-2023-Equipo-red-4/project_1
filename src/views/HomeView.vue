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
