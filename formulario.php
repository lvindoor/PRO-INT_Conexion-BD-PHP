<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Siiau Escolar</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="shortcut icon" type="image/x-icon" href="http://siiauescolar.siiau.udg.mx/favicon.ico" />

    </head>
    <body>

        <header>

            <div class="nav">
                <ul>
                    <li><a href="index.php">index</a></li>
                    <li><a href="formulario.php">formulario</a></li>
                </ul>
            </div>

        </header>

        <main>            

            <form class="contacto" action="store.php" method="POST" >

                <div class="titulo">
                    <h1>S I A U </h1>
                    <h2>シあう <br> Escolar</h2>
                </div>

               <label for="codigo">
                    <input id="codigo" name="codigo" type="number" placeholder="Codigo Alumno" required> <br>
                </label>
               
                <label for="nombre">
                    <input id="nombre" name="nombre" type="text" placeholder="Nombre Completo" required> <br>
                </label>
                <label for="correo">
                    <input id="correo" name="correo" type="mail" placeholder="Correo Electronico"> <br>
                </label>       
                <label for="contraseña">
                    <input id="contraseña" name="contraseña" type="password" placeholder="Contraseña" required> <br>
                </label>

                <div class="genero">
                    <p>Genero</p>

                    <label for="hombre">
                        <input id="hombre" name="genero" type="radio" name="sexo" value="hombre"> Hombre 
                    </label>
                    <label for="mujer">
                        <input id="mujer" name="genero" type="radio" name="sexo" value="mujer"> Mujer
                    </label> <br>
                </div>           

                <button type="submit">Enviar</button> <br>

                <label class="mensaje" for="contacto">
                    <p>Al enviar aceptas que toda tu información ahora es de SIAU Escolar (ಠ◡ಠ) </p>
                </label>
            </form>
        </main>

    </body>
</html>