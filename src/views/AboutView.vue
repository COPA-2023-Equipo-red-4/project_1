<template>
  <div class="about vh-100">
    <NavBarComponent/>
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
