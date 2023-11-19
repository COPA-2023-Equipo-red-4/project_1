<template>

<div class="banner">
    <img src="../assets/animation-pet-banner.gif" alt="imagen">
    
</div>
<h1>El texto importa</h1>
</template>

<script>
    export default {
        
    }
</script>

<style  scoped>

.banner {
    background-color: #ffffff; /* Cambia el color según tus preferencias */
    text-align: center;
    flex: auto;
}

.banner img {
    max-width: 100%;
    display: flex;
}

h1 {
    margin-bottom: 100px;
    margin-top: -100px;
}

</style>