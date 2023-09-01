<?php
require_once 'tcpdf.php'; // Reemplaza la ruta correcta

if (isset($_POST['generar_agua'])) {
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    

    $nombre_obra = $_POST['nombre_obra'];

    // Agregar la definición de fuente (si es necesario)
    $pdf->SetFont('dejavusans', 'B', 20);

    // Agregar el encabezado del documento
    $pdf->AddPage();
    $pdf->Image('tu_logo.png', 10, 10, 30); // Agrega el logo en la parte superior
    $pdf->SetFont('dejavusans', 'B', 20);
    $pdf->Cell(0, 10, '________________________', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Lista de Materiales Agua', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Obra: ' . $nombre_obra, 0, 1, 'C');

    // Agregar la tabla de materiales
    $tabla = array(
        array('Material', 'Cantidad'),
    );

    // Agregar los materiales que tengan cantidad mayor a 0
    $materiales = array(
        'codos_90°_fusión_de_20', 'codos_90°_fusión_de_25', 'codos_90°_fusión_de_32', 'codos_90°_fusión_de_40', 'codos_90°_fusión_de_50',
        'codos_90°_fusión_de_63', 'codos_45°_fusión_de_20', 'codos_45°_fusión_de_25', 'codos_45°_fusión_de_32', 'codos_45°_fusión_de_40',
        'codos_45°_fusión_de_50', 'codos_45°_fusión_de_63', 'tee_fusión_de_20', 'tee_fusión_de_25', 'tee_fusión_de_32', 'tee_fusión_de_40',
        'tee_fusión_de_50', 'tee_fusión_de_63', 'uniones_dobles_de_20', 'uniones_dobles_de_25', 'uniones_dobles_de_32', 'uniones_dobles_de_40',
        'uniones_dobles_de_50', 'uniones_dobles_de_63', 'cuplas_fusión_de_20', 'cuplas_fusión_de_25', 'cuplas_fusión_de_32', 'cuplas_fusión_de_40',
        'cuplas_fusión_de_50', 'cuplas_fusión_de_63', 'caños_fusión_de_20', 'caños_fusión_de_25', 'caños_fusión_de_32', 'caños_fusión_de_40', 
        'caños_fusión_de_50', 'caños_fusión_de_63', 'cuplas_fusión_de_20_r/h_½', 'cuplas_fusión_de_25_r/h_½', 'cuplas_fusión_de_32_r/h_½', 
        'cuplas_fusión_de_40_r/h_½', 'cuplas_fusión_de_20_r/m_½', 'cuplas_fusión_de_25_r/m_½', 'cuplas_fusión_de_32_r/m_½', 
        'cuplas_fusión_de_40_r/m_½', 'cuplas_fusión_de_25_r/h_¾', 'cuplas_fusión_de_32_r/h_¾', 'cuplas_fusión_de_40_r/h_¾', 
        'cuplas_fusión_de_50_r/h_¾', 'cuplas_fusión_de_25_r/m_¾', 'cuplas_fusión_de_32_r/m_¾', 'cuplas_fusión_de_40_r/m_¾', 
        'cuplas_fusión_de_50_r/m_¾', 'cuplas_fusión_de_25_r/h_1', 'cuplas_fusión_de_32_r/h_1', 'cuplas_fusión_de_40_r/h_1', 
        'cuplas_fusión_de_50_r/h_1', 'cuplas_fusión_de_25_r/m_1', 'cuplas_fusión_de_32_r/m_1', 'cuplas_fusión_de_40_r/m_1',
        'cuplas_fusión_de_50_r/m_1', 'tee_fusión_20_r/h_½', 'tee_fusión_25_r/h_½', 'tee_fusión_25_r/h_¾', 'tee_fusión_32_r/h_½', 
        'tee_fusión_32_r/h_¾', 'tee_fusión_32_r/h_1', 'codos_90°_fusion_20_r/h_½', 'codos_90°_fusion_20_r/h_¾', 'codos_90°_fusion_20_r/h_1', 
        'codos_90°_fusión_25_r/h_½', 'codos_90°_fusión_25_r/h¾', 'codos_90°_fusión_25_r/h_1',
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
