<template> 
    <div class="container">
      <div class="row ">
              <div class="col-md-4 justify-content-center align-items-center d-flex mb-3 mt-3 pt-5"  v-for="item in 12" :key="item">
                          <div class="card" style="width: 18rem;">
                            
                            <img src="https://picsum.photos/id/237/100/100" class="card-img-top" alt="CardPets">
                            <div class="card-body">
                              <h5 class="card-title">Animalito</h5>
                              <p class="card-text">Raza</p>
                              <p class="card-text">Color</p>
                              <a href="#" class="btn btn-warning text-uppercase">Ver más</a>
                            </div>
                          </div>
              </div>
        </div>
    </div>
      
</template>

<script>
export default{
    name: "CardsComponent"
};
</script>

<style scoped>

</style>