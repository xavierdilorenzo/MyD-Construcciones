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
<body>
  <div class="container">
    <div class="logo">
      <img src="tu_logo.png" alt="Logo de tu empresa">
    </div>
    <h1>Generar PDF de Materiales</h1>
    <h2>Aire</h2>

    <form action="generar-aire.php" method="post">
      <label for="nombre_obra">Obra:</label>
      <input type="text" id="nombre_obra" name="nombre_obra" required><br><br>
       <!-- Campo de búsqueda -->
      <div class="search">
        <input type="text" id="material_buscar" placeholder="Buscar material...">
      </div>
      <table>
      <input type="submit" name="generar_aire" value="Generar PDF">
        <tr>
          <th>Material</th>
          <th>Cantidad</th>
        </tr>
        <!-- Filas de materiales -->
        <tr class="material_row">
          <td class="material_name">Caño 32</td>
          <td><input type="number" name="caño_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Caño 40</td>
          <td><input type="number" name="caño_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Caño 50</td>
          <td><input type="number" name="caño_50" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Caño 63</td>
          <td><input type="number" name="caño_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Caño 110</td>
          <td><input type="number" name="caño_110" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90 fusión de 63</td>
          <td><input type="number" name="codos_90º_32_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90º 40 m/h</td>
          <td><input type="number" name="codos_90º_40_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90º 50 m/h</td>
          <td><input type="number" name="codos_90º_50_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90º 63 m/h</td>
          <td><input type="number" name="codos_90º_63_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90º 110 m/h</td>
          <td><input type="number" name="codos_90º_110_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90º 32 h/h</td>
          <td><input type="number" name="codos_90º_32_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
         
        <tr class="material_row">
          <td class="material_name">Codos 90º 40 h/h"</td>
          <td><input type="number" name="codos_90º_40_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90° 50 h/h"</td>
          <td><input type="number" name="codos_90º_50_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90° 63 h/h "</td>
          <td><input type="number" name="codos_90º_63_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 90° 110 h/h "</td>
          <td><input type="number" name="codos_90º_110_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45° 32 m/h"</td>
          <td><input type="number" name="codos_45º_32_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45° 40 m/h "</td>
          <td><input type="number" name="codos_45º_40_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        








        <tr class="material_row">
          <td class="material_name">Codos 45º 50 m/h</td>
          <td><input type="number" name="codos_45º_50_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45º 63 m/h</td>
          <td><input type="number" name="codos_45º_63_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45º 110 m/h</td>
          <td><input type="number" name="codos_45º_110_m/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45º 32 h/h</td>
          <td><input type="number" name="codos_45º_32_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45º 40 h/h</td>
          <td><input type="number" name="codos_45º_40_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45º 50 h/h</td>
          <td><input type="number" name="codos_45º_50_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45º 63 h/h</td>
          <td><input type="number" name="codos_45º_63_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45º 110 h/h</td>
          <td><input type="number" name="codos_45º_110_h/h" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Cuplas 32</td>
          <td><input type="number" name="cuplas_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Codos 45 fusión de 40</td>
          <td><input type="number" name="cuplas_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Cuplas 50</td>
          <td><input type="number" name="cuplas_50" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Cuplas 63</td>
          <td><input type="number" name="cuplas_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
         
        <tr class="material_row">
          <td class="material_name">Cuplas 110</td>
          <td><input type="number" name="cuplas_110" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Reduccion 40 a 32</td>
          <td><input type="number" name="reducción_40_a_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Reduccion 50 a 40"</td>
          <td><input type="number" name="reducción_50_a_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Reduccion 63 a 40</td>
          <td><input type="number" name="reducción_63_a_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Reduccion 63 a 50</td>
          <td><input type="number" name="reducción_63_a_50" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-h 110</td>
          <td><input type="number" name="ramal_y_45°_h-h-h_110" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>









        


        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-h 110 a 63</td>
          <td><input type="number" name="
          
          
          ramal_y_45°_h-h-h_110_a_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-h 63</td>
          <td><input type="number" name="ramal_y_45°_h-h-h_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-h 50</td>
          <td><input type="number" name="ramal_y_45°_h-h-h_50" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-h 40</td>
          <td><input type="number" name="ramal_y_45°_h-h-h_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-h 32</td>
          <td><input type="number" name="ramal_y_45°_h-h-h_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-m 110</td>
          <td><input type="number" name="ramal_y_45°_h-h-m_110" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-m 110 a 63</td>
          <td><input type="number" name="ramal_y_45°_h-h-m_110_a_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-m 63</td>
          <td><input type="number" name="ramal_y_45°_h-h-m_63" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-m 50</td>
          <td><input type="number" name="ramal_y_45°_h-h-m_50" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-m 40</td>
          <td><input type="number" name="ramal_y_45°_h-h-m_40" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Ramal y 45° h-h-m 32</td>
          <td><input type="number" name="ramal_y_45°_h-h-m_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Tapon 32</td>
          <td><input type="number" name="tapon_32" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
         
        <tr class="material_row">
          <td class="material_name">Lubricante Caños</td>
          <td><input type="number" name="lubricante_caños" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Caja Preinstalacion Aire Acondicionado Desagüe Vertical </td>
          <td><input type="number" name="caja_preinstalación_aire_acondicionado_desagüe_vertical" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>
        <tr class="material_row">
          <td class="material_name">Caja Preinstalación Aire Acondicionado Desagüe Horizontal</td>
          <td><input type="number" name="caja_preinstalación_aire_acondicionado_desagüe_horizontal" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)"></td>
        </tr>

        <tr class="material_row">
          <td class="material_name">Otro Material</td>
          <td>
            <input type="text" name="material_otro" placeholder="Nombre del material">
            <input type="number" name="cantidad_otro" value="0" onfocus="clearZero(this)" onblur="restoreZero(this)">
        </td>
        

      </table>
      
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