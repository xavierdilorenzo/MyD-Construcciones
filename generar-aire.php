<?php
require_once 'tcpdf.php'; // Reemplaza la ruta correcta

if (isset($_POST['generar_aire'])) {
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false); // Crea el objeto TCPDF

    $nombre_obra = $_POST['nombre_obra'];

    // Agregar la definición de fuente (si es necesario)
    $pdf->SetFont('dejavusans', 'B', 20);

    // Agregar el encabezado del documento
    $pdf->AddPage();
    $pdf->Image('tu_logo.png', 10, 10, 30); // Agrega el logo en la parte superior
    $pdf->SetFont('dejavusans', 'B', 20);
    $pdf->Cell(0, 10, '________________________', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Lista de Materiales Aire', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Obra: ' . $nombre_obra, 0, 1, 'C');

    // Agregar la tabla de materiales
    $tabla = array(
        array('Material', 'Cantidad'),
    );

    // Agregar los materiales que tengan cantidad mayor a 0
    $materiales = array(
        'caño_32', 'caño_40', 'caño_50', 'caño_63', 'caño_110', 'codos_90º_32_m/h', 'codos_90º_40_m/h', 'codos_90º_50_m/h', 'codos_90º_63_m/h',
        'codos_90º_110_m/h', 'codos_90º_32_h/h', 'codos_90º_40_h/h', 'codos_90º_50_h/h', 'codos_90º_63_h/h', 'codos_90º_110_h/h', 'codos_45º_32_m/h',
        'codos_45º_40_m/h', 'codos_45º_50_m/h', 'codos_45º_63_m/h', 'codos_45º_110_m/h', 'codos_45º_32_h/h', 'codos_45º_40_h/h', 'codos_45º_50_h/h',
        'codos_45º_63_h/h','codos_45º_110_h/h', 'cuplas_32', 'cuplas_40', 'cuplas_50', 'cuplas_63', 'cuplas_110', 'reducción_40_a_32', 
        'reducción_50_a_40', 'reducción_63_a_40', 'reducción_63_a_50', 'ramal_y_45°_h-h-h_110', 'ramal_y_45°_h-h-h_110_a_63', 
        'ramal_y_45°_h-h-h_63', 'ramal_y_45°_h-h-h_50', 'ramal_y_45°_h-h-h_40', 'ramal_y_45°_h-h-h_32', 'ramal_y_45°_h-h-m_110', 
        'ramal_y_45°_h-h-m_110_a_63', 'ramal_y_45°_h-h-m_63', 'ramal_y_45°_h-h-m_50', 'ramal_y_45°_h-h-m_40', 'ramal_y_45°_h-h-m_32', 
        'tapon_32', 'lubricante_caños', 'caja_preinstalación_aire_acondicionado_desagüe_vertical', 'caja_preinstalación_aire_acondicionado_desagüe_horizontal',
    );
    if ($_POST['material_otro'] && $_POST['cantidad_otro'] > 0) {
        $material_otro = $_POST['material_otro'];
        $cantidad_otro = $_POST['cantidad_otro'];
    
        // Agregar el material personalizado a la tabla
        $tabla[] = array($material_otro, $cantidad_otro);
    }

    foreach ($materiales as $material) {
        $cantidad = $_POST[$material];
        if ($cantidad > 0) {
            $material_nombre = str_replace('_', ' ', ucfirst($material));
            $tabla[] = array($material_nombre, $cantidad);
        }
    }
    

    $pdf->SetFont('dejavusans', '', 16); // Aumenta el tamaño de la fuente
    $pdf->SetFillColor(243, 156, 18); // Color de fondo de la celda

    foreach ($tabla as $fila) {
        $pdf->Cell(120, 10, $fila[0], 1, 0, 'C', 1); // Aumenta el ancho y el alto de la celda
        $pdf->Cell(60, 10, $fila[1], 1, 1, 'C', 1); // Aumenta el ancho y el alto de la celda
    }

    // Generar el PDF y mostrarlo en el navegador con el nombre de la obra como título
    $pdf->Output($nombre_obra . '.pdf', 'D');
}
?>
