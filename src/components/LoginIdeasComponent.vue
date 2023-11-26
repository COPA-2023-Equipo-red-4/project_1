<template>
    <div class="pt-5">
        <div>

        </div>
        <h2 class="texto-importante">Frases que importan</h2>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pt-5">
                        <p class="lead mb-2">{{ frase }}</p>
                        <p class="text-right">{{ autor }}</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script >



export default {
    name: 'LoginIdeasComponent',
    data() {
        return {

            frase: "",
            autor: ""
        };


    },
    mounted() {
        this.mostrarFraseAleatoria()
    },
    methods: 
    {obtenerFraseAleatoria() {
        // Palabras que quieres que aparezcan en el h1
        const frases = [{ frase: "Nadie aprecia el genio innato de tu conversación como lo hace tu perro.", autor: "Christopher Morley" }
            , { frase: "El dinero puede comprarte un lindo perrito, pero no puede comprar que sacuda su cola", autor: "Henry Wheeler Shaw" }
            , { frase: "Si un perro no viene a tí después de mirarte a la cara, es mejor que vayas a casa y examines tu conciencia", autor: "Woodrow Wilson" }
            , { frase: "Los perros no son toda tu vida, pero hacen tu vida completa.", autor: "Roger Caras" }
            , { frase: "La grandeza de una nación y su progreso moral puede ser juzgado por la forma en que sus animales son tratados.", autor: "Gandhi" }
            , { frase: "El peor pecado que cometemos contra nuestros amigos las animales no es odiarlos, es ser indiferentes con ellos. Esa es la esencia de lo inhumano.", autor: "George Bernard Shaw" }
            , { frase: "Errar es de humanos, perdonar es de perros.", autor: "Anónimo" }
            , { frase: "Cuando un hombre se apiade de todas las criaturas vivientes, sólo entonces será noble.", autor: "Buda" }
            , { frase: "Cuando todos los animales se hayan ido, el hombre morirá de soledad.", autor: "Anónimo" }
            , { frase: "En algún lugar bajo la lluvia, siempre habrá un perro abandonado que me impedirá ser feliz.", autor: "Anouilh, Jean" }
            , { frase: "Todos los animales excepto el hombre saben que el máximo de la vida es disfrutarla.", autor: "Butler, Samuel" }
            , { frase: "Hasta que uno no ha amado a un animal, parte de su alma permanece dormida.", autor: "France, Anatole" }
        ];
        const indice = Math.floor(Math.random() * frases.length);
        return frases[indice];

    },
    mostrarFraseAleatoria() {
        const { frase, autor } = this.obtenerFraseAleatoria();
        this.frase = frase;
        this.autor = `- ${autor}`;
    }
}

    // Elige una palabra aleatoria de la lista

}

    ;



</script>

<style scoped>
li {
    list-style: none;
}

.texto-importante {
    color: aliceblue;
}
</style>