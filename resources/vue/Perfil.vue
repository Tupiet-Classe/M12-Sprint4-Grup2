<!-- Codi de la pagina -->
<template>

    <div class="titul">
        <h2>Editar perfil</h2>
    </div>

    <div class="form-container">
        <img class="img-perfil" src="https://profesional.semillasbatlle.com/wp-content/uploads/2020/07/semillas-oleaginosas-industriales-girasol.jpg" alt="">
      <form>
        <input type="text" placeholder="Nombre">
        <input type="text" placeholder="Nombre de usuario">
        <input type="password" placeholder="Descripción">
        <input type="text" placeholder="Contraseña">
        <input type="submit" value="Guardar cambios">
      </form>
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

    .titul{
        text-align: center;
    }
    .img-perfil{
        width: 6%;
        padding-bottom: 50px;
        border-radius: 50%;
    }
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
      }

      form {
        width: 25%;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 10px;
      }

      input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border-radius: 5px;
        border: none;
      }

      input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border-radius: 5px;
        border: none;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
      }

</style>

<!-- Scripts per a esta vista -->
<script>

</script>
