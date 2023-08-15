<?php
require_once 'tcpdf.php'; // Reemplaza la ruta correcta

if (isset($_POST['generar_pdf'])) {
    $pdf = new TCPDF(); // Crea el objeto TCPDF

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
        'codos_90º_20', 'codos_90º_25', 'codos_90º_32', 'codos_90º_40', 'codos_90º_50', 'codos_90º_63',
        'codos_45º_20', 'codos_45º_25', 'codos_45º_32', 'codos_45º_40', 'codos_45º_50', 'codos_45º_63',
        'tee_20', 'tee_25', 'tee_32', 'tee_40', 'tee_50', 'tee_63',
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
