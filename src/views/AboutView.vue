<template>
  <div class="about">
    <h1>This is an about page</h1>
    <AboutComponent/>
  </div>
</template>
<script>
import AboutComponent from '@/components/AboutComponent.vue'
export default{
  name: 'AboutView',
  components:{
    AboutComponent
  }
}
</script>
