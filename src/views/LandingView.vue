<template>
  <div class="about vh-100">
    <AboutComponent/>

  </div>
  
</template>
<script>
import AboutComponent from '@/components/AboutComponent.vue';

export default{
  name: 'AboutView',
  components:{
    AboutComponent,
    }
}
</script>
