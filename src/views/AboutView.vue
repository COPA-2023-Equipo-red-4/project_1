<template>
  <div class="about vh-100">
    <NavBarComponent/>
    <h1>This is an about page</h1>
    <AboutComponent/>

  </div>
  
</template>
<script>
import AboutComponent from '@/components/AboutComponent.vue';
import NavBarComponent from '@/components/NavBarComponent.vue';

export default{
  name: 'AboutView',
  components:{
    AboutComponent,
    NavBarComponent}
}
</script>
