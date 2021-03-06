<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../../css/materialize.css" />

</head>
<body>
    <h1>Registro</h1>
    <div class="row">
        <a href="user.php" title="Atras">
            <input type="button" class="btn" name="" value="Atras"></a>
        </div>
        <form action="../../model/cod_registro.php" method="post">
            <div class="row">
                <div class="row">
                    <div class="input-field col s12 m6 l3">
                        <input type="text" id="rut" name="rut" required>
                        <label for="Rut...">Rut...</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l3">
                        <input type="text" id="nombre" name="nombre" required>
                        <label for="Nombre...">Nombre...</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l3">
                        <input type="text" id="apellido" name="apellido" required>
                        <label for="Apellido...">Apellido...</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 13">
                        <button class="btn" type="submit"> Registrar Usuario</button>
                    </div>
                </div>
            </div>
        </form>
        <script src="../../js/materialize.js"></script> 
    </body>
    </html>