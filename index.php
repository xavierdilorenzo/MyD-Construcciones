<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generar PDF de Materiales</title>
  <style>
    /* Estilos CSS existentes */

    body {
      background-color: #f4f4f4;
      color: #333;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      text-align: center; /* Alinea el contenido al centro */
    }

    h1 {
      color: #f39c12;
    }

    .logo {
      margin: 1px ; /* Agrega margen arriba y abajo */
    }

    .logo img {
      max-width: 15%; /* Asegura que el logo no exceda el ancho del contenedor */
    }

    /* Estilos para los botones */
    .button-container {
      margin-top: 20px;
    }

    .button-row {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 10px;
    }

    .material-button {
      margin: 5px;
      padding: 10px 0; /* Ajusta el relleno vertical */
      width: 200px; /* Anchura fija para los botones */
      background-color: #f39c12;
      color: #000; /* Cambia el color del texto a negro */
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      outline: none; /* Elimina el contorno de enfoque */
    }

    .material-button a {
      color: #000; /* Cambia el color del enlace a negro */
      text-decoration: none; /* Elimina la línea de subrayado del enlace */
    }

    /* Otros estilos... */
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="tu_logo.png" alt="Logo de tu empresa">
    </div>
    <h1>Generar PDF de Materiales</h1>
    <div class="button-container">
      <div class="button-row">
        <button class="material-button"><a href="agua.php">Agua</a></button>
        <button class="material-button"><a href="aire.php">Aire Acondicionado</a></button>
      </div>
      <div class="button-row">
        <button class="material-button"><a href="agua.php">Gas</a></button>
        <button class="material-button"><a href="agua.php">Cloaca</a></button>
      </div>
      <div class="button-row">
        <button class="material-button"><a href="agua.php">Pluviales</a></button>
        <button class="material-button"><a href="agua.php">Sistema De Riego</a></button>
      </div>
      <div class="button-row">
        <button class="material-button"><a href="agua.php">Calefacción Por Radiadores</a></button>
        <button class="material-button"><a href="agua.php">Calefacción Por Pisos Radiantes</a></button>
      </div>
      <button class="material-button"><a href="agua.php">Termotanques solares</a></button>
    </div>
  </div>
</body>
</html>
