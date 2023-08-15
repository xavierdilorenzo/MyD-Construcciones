<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generar PDF de Materiales</title>
  <style>
    /* Estilos CSS existentes */

    .search {
      margin-bottom: 10px;
      text-align: center;
    }

    #material_buscar {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
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

    label {
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: center;
      border: 1px solid #ddd;
    }

    th {
      background-color: #f39c12;
      color: white;
    }

    input[type="submit"] {
      background-color: #f39c12;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #e67e22;
    }

    .logo {
      margin: 1px ; /* Agrega margen arriba y abajo */
    }

    .logo img {
      max-width: 10%; /* Asegura que el logo no exceda el ancho del contenedor */
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
    <h2>Agua</h2>

    <form action="generar-pdf.php" method="post">
      <label for="nombre_obra">Obra:</label>
      <input type="text" id="nombre_obra" name="nombre_obra" required><br><br>
       <!-- Campo de búsqueda -->
      <div class="search">
        <input type="text" id="material_buscar" placeholder="Buscar material...">
      </div>
      <table>
        <tr>
          <th>Material</th>
          <th>Cantidad</th>
        </tr>
        <!-- Filas de materiales -->
        <tr class="material_row">
          <td class="material_name">Codos 90 fusión de 20</td>
          <td><input type="number" name="codos_90_20" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90 fusión de 25</td>
          <td><input type="number" name="codos_90_25" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90 fusión de 32</td>
          <td><input type="number" name="codos_90_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90 fusión de 40</td>
          <td><input type="number" name="codos_90_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90 fusión de 50</td>
          <td><input type="number" name="codos_90_50" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90 fusión de 63</td>
          <td><input type="number" name="codos_90_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45 fusión de 20</td>
          <td><input type="number" name="codos_45_20" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45 fusión de 25</td>
          <td><input type="number" name="codos_45_25" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45 fusión de 32</td>
          <td><input type="number" name="codos_45_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45 fusión de 40</td>
          <td><input type="number" name="codos_45_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45 fusión de 50</td>
          <td><input type="number" name="codos_45_50" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45 fusión de 63</td>
          <td><input type="number" name="codos_45_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Tee fusión de 20</td>
          <td><input type="number" name="tee_20" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Tee fusión de 25</td>
          <td><input type="number" name="tee_25" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Tee fusión de 32</td>
          <td><input type="number" name="tee_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Tee fusión de 40</td>
          <td><input type="number" name="tee_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Tee fusión de 50</td>
          <td><input type="number" name="tee_50" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Tee fusión de 63</td>
          <td><input type="number" name="tee_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Otro Material</td>
          <td>
            <input type="text" name="material_otro" placeholder="Nombre del material">
            <input type="number" name="cantidad_otro" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)">
        </td>
        </tr>
      </table>
      <input type="submit" name="generar_agua" value="Generar PDF">
    </form>
  </div>

  <!-- Script de búsqueda -->
  <script>
  const materialBuscarInput = document.getElementById('material_buscar');
  const materialRows = document.querySelectorAll('.material_row');

  function clearZero(input) {
    if (input.value === '0') {
      input.value = '';
    }
  }

  function restoreZero(input) {
    if (input.value === '') {
      input.value = '0';
    }
  }

  materialBuscarInput.addEventListener('input', function() {
    const searchTerm = materialBuscarInput.value.toLowerCase();

    materialRows.forEach(row => {
      const materialName = row.querySelector('.material_name').textContent.toLowerCase();

      if (materialName.includes(searchTerm)) {
        row.style.display = 'table-row';
      } else {
        row.style.display = 'none';
      }
    });
  });
 </script>
</body>
</html>
