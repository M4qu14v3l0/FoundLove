<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/edit_per.css')}}">

    <!-- font awesome !-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">

    <title>Home</title>
</head>
<body>
<header>
    <div class="litle_menu">
        <button class="edit">Editar</button>
        <button class="edit">Vista previa</button>
    </div>

</header>

<main>
    <div >
        <section>
            <div class="div_button" >
                <div class="main-image-wrapper">
                    <img src="{{asset(('pictures/user-picture/Bradd.jpg'))}}" alt="" class="user-img">
                </div>
                <div class="text">
                    Agrega un video, una foto o un loop para estar 4% más cerca de tener un perfil completo. Así podras conseguir más likes.
                </div>
                <button class="button">AÑADIR ARCHIVOS</button>
            </div>


        </section>
        <section class="Descripcion" >
            <div >
                <article>
                    <h4>
                        Acerca de mi
                    </h4>
                    <div class="text">
                        <input class="controls" type="text" name="sexo" id="Más" placeholder="">
                    </div>
                    <div>No incluyas nombres de usuario de redes sociales u otra información de contacto en tu perfil.</div>

                </article>
                <article>
                    <h2>
                        Interests
                    </h2>
                    <div class="interest-user-info">
                        <div class="bubble-user-interest"><p>Eat</p></div>
                        <div class="bubble-user-interest"><p>Drink</p></div>
                        <div class="bubble-user-interest"><p>Watch TV</p></div>
                        <div class="bubble-user-interest"><p>Cycling</p></div>
                    </div>

                </article>
                <article>
                    <h2>
                        Social Media
                    </h2>
                    <div class="social-media-user">
                        <div class="social-media"><i class="fa-brands fa-facebook"></i></div>
                        <div class="social-media"><i class="fa-brands fa-instagram-square"></i></div>
                        <div class="social-media"><i class="fa-brands fa-whatsapp-square"></i></div>
                    </div>
                </article>

                <article>
                    <h2>Galeria</h2>
                </article>
            </div>
        </section>

    </div>
</main>

<footer>

</footer>

</body>
</html>
