<!-- Codi de la pagina -->
<template>
    <div class="tot">
    <div class="titul">
        <h2>Editar perfil</h2>
    </div>

    <div class="formulari-tot">
        <form>
            <img class="foto-perfil" src="https://www.blogdelfotografo.com/wp-content/uploads/2022/01/girasol-foto-perfil.webp" alt="">
            <br>
            <button>Editar foto perfil</button>
            <br><br><br>

            <div class="formulari-label">
                <label for="nombre">Nombre: </label><br>
                <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/><br><br>

                <label for="apellidos">Nombre de usuario: </label><br>
                <input type="text" name="nom_usuario" id="nom_usuario" placeholder="Escribe tu nombre de usuario"/><br><br>

                <label for="email">Presentación: </label><br>
                <input type="text" name="presentación" id="presentación" placeholder="Presentación" required /><br><br><br>
                <input type="submit" name="enviar" value="Enviar datos"/>
            </div>
        </form>
    </div>
</div>

</template>


<!-- Estils per a esta vista -->
<style scoped>
    /* form{
        width:300px;
        padding:50px;
        border-radius:10px;
        margin:auto;
        background-color:#ccc;
    } */

    .tot{
        text-align: center;
    }

    .foto-perfil{
        width: 50px;
    }

    .formulari-label{
        width:250px;
        padding:50px 50px 25px 50px;
        border-radius:10px;
        margin:auto;
        background-color:#ccc;
        text-align: center;
    }

</style>

<!-- Scripts per a esta vista -->
<script>

</script>
