<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/sexo.css')}}">

    <title>Document</title>
</head>
<body>

<form class="form-register">
    <div class="radio">
        <h4>Sexo</h4>
        <div>
            <input class="controls" type="radio" name="sexo" id="hombre" placeholder="">
            <label for="hombre">Hombre</label>
        </div>

        <div>
            <input class="controls" type="radio" name="sexo" id="mujer" placeholder="">
            <label for="mujer">Mujer</label>
        </div>

        <div>
            <input class="controls" type="radio" name="sexo" id="Alien" placeholder="">
            <label for="Alien">Alien</label>
        </div>

        <div>
            <input class="controls" type="radio" name="sexo" id="Más" placeholder="">
            <label for="Más">Más</label>
        </div>
        <div class="text">En Found Love buscamos ser inclusivos por lo que si no te identificas con ningun genero puedes hacer click en Más</div>
        <input class="button" type="submit" value="Continuar">
    </div>
</form>
</body>
</html>
