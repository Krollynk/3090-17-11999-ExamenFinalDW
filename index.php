<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
  </head>
  <body>
      <div class="contenedor">
        
        <h1>Formulario</h1>
        <form action="" name="formulario">
          <label for="codigo">carné</label>
          <input type="number" id="carnet">
          <div class="datos" id="datos">
            <p></p>
          </div>
          <input type="button" class="boton" id="enviar" value="enviar" onclick="validar()">
        </form>
      </div>
  </body>
  <script src="./js/validacion.js"></script>
</html>