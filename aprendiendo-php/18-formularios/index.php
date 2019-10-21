<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP Y HTML</title>
</head>
<body>
    <H1>Formulario</H1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
                <p><input type="text" name="nombre" autofocus="autofocus" pattern="[A-Za-z ]+" required="required" placeholder="Ingresa tu nombre"/><br/></p>
            <label for="apellido">Apellido:</label>
                <p><input type="text" name="apellido" autofocus="autofocus" pattern="[A-Za-z ]+" required="required" placeholder="Ingresa tu apellido"/><br/></p>
                

                <label for="boton">Botón:</label>
                <p><input type="button" name="boton" value="Clickeame"/></p>

                <label for="sexo">Sexo:</label>
                <p>
                    Masculino<input type="checkbox" name="sexo" value="Masculino"/>
                    Femenino<input type="checkbox" name="sexo" value="Femenino"/>
                </p>

                <label for="color">color:</label>
                <p><input type="color" name="color" /></p>

                <label for="correo">Correo:</label>
                <p><input type="email" name="correo" /></p>
                
                <label for="archivo">Archivo:</label>
                <p><input type="file" name="archivo" multiple="multiple" /></p>
                
                <label for="numero">Numero:</label>
                <p><input type="number" name="numero" /></p>
                
                <label for="pass">Contraseña:</label>
                <p><input type="password" name="pass" /></p>

                <label for="continente">Continente:</label>
                <p>
                    America del sur<input type="radio" name="continente" value="America del sur" />
                    Europa<input type="radio" name="continente" value="Europa" />
                    Asia<input type="radio" name="continente" value="Asia" />
                </p>
                
                <label for="WEB">Pagina WEB:</label>
                <p><input type="url" name="WEB" /></p>

                <textarea name="" id="" cols="15" rows="6"></textarea><br/>
                

                Películas:
                <select name="peliculas" id="">
                    <option value="Spiderman">Spiderman</option>
                    <option value="Batman">Batman</option>
                    <option value="Hulk">Hulk</option>
                    <option value="Iron Man">Iron Man</option>
                </select>



                <p><input type="submit" value="Enviar" /></p>
        </form>
    
</body>
</html>