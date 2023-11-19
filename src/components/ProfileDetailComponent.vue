<template>
  <div>
    <!-- div - inicio -->

    <div class="container" style="width: 70rem">
      <h2 class="text-light text-start mt-5 mb-5 justify-content-center">
        {{ user2.nameUser }} , bienvenido !
      </h2>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
              Mis adopciones
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse show"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <table class="table table-hover">
                <tbody>
                  <tr v-for="(elem, index) in datadetail" :key="index">
                    <td>{{ elem.date }}</td>
                    <td>
                      Adoptaste a <strong>{{ elem.petname }}</strong
                      >, felicidades!
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="false"
              aria-controls="collapseTwo"
            >
              Mis Favoritos
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            data-bs-parent="#accordionExample"
          >
            <div class="accordion-body">
              <table class="table table-hover">
                <tbody>
                  <tr v-for="(item, index) in datadetail" :key="index">
                    <td>
                      <strong>{{ item.petname }}</strong>
                      ahora está en tus favoritos
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- div - fin -->
</template>

<script>
export default {
  data() {
    return {
      datadetail: [
        {
          date: "2023-11-01",
          pet: "Perro",
          petname: "Firulais",
        },
        {
          date: "2023-11-02",
          pet: "Gato",
          petname: "Peludo",
        },
        {
          date: "2023-11-03",
          pet: "Ave",
          petname: "Plumas",
        },
      ],
      user2: {
        nameUser: "Alexandra",
      },
    };
  },
};
</script>

<style scoped></style>
