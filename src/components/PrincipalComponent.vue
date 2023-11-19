 <template>
    <div>
        <h1>¡Bienvenido! ADOPTA una mascota</h1>
        <div class="principal">
                     
        <section>  <a href="#"> <img src="@/assets/perro.jpeg" alt="Perro">    </a>    </section>
        <section>  <a href="#"> <img src="@/assets/gato.jpeg" alt="Gato">      </a>    </section>
        <section>  <a href="#"> <img src="@/assets/conejo.jpeg" alt="Conejo">  </a>    </section>
        <button @click="QuieroAdoptar()"> QUIERO ADOPTAR </button>
        
        </div>
    </div>
</template>

<script>
export default{
    name:'PrincipalComponent',
    methods:{
        QuieroAdoptar(){
            this.$router.push(`/pets`)
        }
    }
}


</script>

<style scoped>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    height: 100vh;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
}

h1 {
text-align: center;  
}

.principal {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 20px;
}

.principal > div {
    width: 100%;
    text-align: center;
    margin-bottom: 20px;
}

.principal > div > span {
    font-size: 40px;
    font-weight: bold;
}

section {
    margin: 10px;
}

section > a > img {
    max-width: 300px;
    height: auto;
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.6);
}

section > a:hover > img {
    transform: scale(1.09); 
    box-shadow: 0px 0px 20px 7px rgba(0, 0, 0, 0.8);
}

button {
    display: block;        
    width: 75%;            
    margin: 10px auto;     
    padding: 15px;         
    background-color: #007BFF; 
    color: #fff;           
    font-size: 20px;       
    border: none;          
    border-radius: 5px;    
    cursor: pointer;       
    text-align: center;    
    text-decoration: none; 
    transition: background-color 0.5s;
    
}

button:hover {
    background-color: #0056b3;
}

</style>