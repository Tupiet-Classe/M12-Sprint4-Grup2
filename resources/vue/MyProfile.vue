<!-- Codi de la pagina -->
<template>
    <div class="pt-5 posts w-full sm:w-96 flex flex-col items-center gap-3 overflow-y-scroll">
        <form class="content bg-white w-full mx-5 p-3 rounded-lg flex flex-col text-sm relative">
            <div class="flex flex-col items-center">
                <img class="img-perfil"
                    src="https://profesional.semillasbatlle.com/wp-content/uploads/2020/07/semillas-oleaginosas-industriales-girasol.jpg"
                    alt="">
            </div>
            <div class="content bg-cyan w-full p-3 rounded-lg flex flex-col text-sm relative">
                <label class="block font-bold mb-2" for="email">
                    Nombre del usuario
                </label>
                <input class="w-full border border-gray-400 p-2 rounded-lg" type="text">
            </div>
            <div class="mt-5 content bg-cyan w-full p-3 rounded-lg flex flex-col text-sm relative">
                <label class="block font-bold mb-2">
                    Descripción
                </label>
                <input class="w-full border border-gray-400 p-2 rounded-lg" type="text">
            </div>
        </form>
        <div class="posts w-full sm:w-96 flex flex-col items-center gap-3 overflow-y-scroll">
            <div class="post flex flex-col gap-y-3 items-center bg-white rounded-md p-4">
                <div class="info bg-cyan w-full mx-5 p-3 rounded-lg flex flex-row gap-y-3">
                    <div class="user-image w-16">
                        <img src="demo_img/bot.png" alt="logo">
                    </div>
                    <div class="other-content w-full flex justify-between">
                        <div class="user-info flex flex-col h-full justify-around ml-4 gap-y-1">
                            <span class="username text-sm font-comfortaa font-semibold">@tupiet</span>
                            <button class="btn-follow bg-purple rounded-xl py-0.5 px-4 text-white">Seguir</button>
                        </div>

                        <div class="extra-info flex gap-x-3 items-baseline">
                            <span class="time text-sm">Hace 3 días</span>
                            <i class="fa-solid fa-ellipsis-vertical text-purple cursor-pointer"></i>
                        </div>
                    </div>
                </div>

                <div class="images w-full mx-5 mt-1">
                    <div class="image w-full">
                        <img src="demo_img/landscape.jpg" alt="image" class="rounded-md">
                    </div>
                </div>

                <div class="content bg-cyan w-full mx-5 p-3 rounded-lg flex flex-col text-sm relative">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus perferendis officiis eos est neque
                        modi explicabo commodi asperiores, delectus laboriosam. Numquam asperiores quod fugit odio obcaecati
                        quae autem molestias deserunt!</p>
                    <div class="topics mt-2 flex flex-wrap gap-2">
                        <span class="topic bg-red py-1 px-2 rounded-xl text-white w-fit">
                            #hello-world
                        </span>
                        <span class="topic bg-red py-1 px-2 rounded-xl text-white w-fit">
                            #test
                        </span>

                    </div>
                </div>

                <div class="options bg-purple w-full flex justify-around mx-5 p-1 rounded-lg text-white text-xl">
                    <button><i class="fa-regular fa-heart"></i></button>
                    <button><i class="fa fa-retweet"></i></button>
                    <button><i class="fa-regular fa-comment"></i></button>
                    <button><i class="fa fa-share"></i></button>
                </div>
            </div>
        </div>
    </div>
</template>


<!-- Estils per a esta vista -->
<style scoped>
.img-perfil {
    width: 25%;
    border-radius: 50%;
}

/* form{
        width:300px;
        padding:50px;
        border-radius:10px;
        margin:auto;
        background-color:#ccc;
    }

    .titul{
        text-align: center;
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
      } */
</style>

<!-- Scripts per a esta vista -->
<script>

</script>
