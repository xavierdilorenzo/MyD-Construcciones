<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generar PDF de Materiales</title>
  <style>
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
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="tu_logo.jpg" alt="Logo de tu empresa">
    </div>
    <h1>Generar PDF de Materiales</h1>
    <form action="generar-pdf.php" method="post">
      <label for="nombre_obra">Obra:</label>
      <input type="text" id="nombre_obra" name="nombre_obra" required><br><br>
      <input type="text" id="material_buscar" placeholder="Buscar material..."> <!-- Nuevo campo de búsqueda -->
      <table>
        <tr>
          <th>Material</th>
          <th>Cantidad</th>
        </tr>
        <tr class="material_row">
          <td class="material_name">Clavo</td>
          <td><input type="number" name="clavo" value="0"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Tuerca</td>
          <td><input type="number" name="tuerca" value="0"></td>
        </tr>
        <!-- Agrega más filas para otros materiales si es necesario -->
      </table>
      <input type="submit" name="generar_pdf" value="Generar PDF">
    </form>
  </div>

  <script>
    const materialBuscarInput = document.getElementById('material_buscar');
    const materialRows = document.querySelectorAll('.material_row');

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