<template>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6">
                <h1 class="text-start text-white fw-bold">Algo se escribe aca que llame la atencion al publico que visite
                </h1>
                <p class="text-start text-white" >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae animi obcaecati alias neque impedit,
                    quod in dolorem nisi laudantium possimus cum. Nobis maiores ad harum ipsam minus perferendis, eaque cum?
                </p>

                <div class="d-flex justify-content-around">
                    <button type="button" class="btn btn-warning fw-bold" @click="SerDonador()">Eres donador</button>
                    <button type="button" class="btn btn-warning fw-bold" @click="SerAdoptante()">Eres Adoptante</button>
                </div>
                
            </div>
            <div class="col-md-6">

                <div class="default-generate-a" />
        <div class="default-generate-a-2" />
        <img
          class="gato"
          alt="Gato"
          src="https://c.animaapp.com/GEg0wu0Z/img/gato@2x.png"
        />
        <img
          class="perro"
          alt="Perro"
          src="https://c.animaapp.com/GEg0wu0Z/img/perro.png"
        />
            </div>
        </div>

    </div>
</template>

<script>
export default{
  name:'AboutComponent',
  methods: {
    SerAdoptante(){
      this.$router.push(`/pets`)
    },
    SerDonador(){
      this.$router.push(`/login`)
    }
  },
}
</script>

<style scoped>
.default-generate-a {
  background-color: #4caf505c;
  border-radius: 20px;
  height: 514px;
  left: 50rem;
  mix-blend-mode: hard-light;
  position: absolute;
  top: 131px;
  width: 472px;
}

.default-generate-a-2 {
  background-color: #4caf5033;
  border-radius: 20px;
  height: 397px;
  left: 891px;
  mix-blend-mode: hard-light;
  position: absolute;
  top: 210px;
  width: 382px;
}

 .gato {
  height: 397px;
  left: 950px;
  object-fit: cover;
  position: absolute;
  top: 210px;
  width: 382px;
}

.perro {
  height: 514px;
  left: 49rem;
  object-fit: cover;
 position: absolute;
  top: 131px;
  width: 472px;

}
</style>

