<template>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/id/145/200/300" class="d-block w-50%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/237/200/300" class="d-block w-50%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/id/231/200/300" class="d-block w-50%" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   <!-- <div class="card" style="width: 18rem;">
  <img src="https://picsum.photos/id/237/100/100" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->
</template>

<script>
export default{
    name: "CardsComponent"
};
</script>

<style lang="scss" scoped>

</style>