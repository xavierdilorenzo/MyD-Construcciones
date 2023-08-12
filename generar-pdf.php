<?php
require_once 'tcpdf.php'; // Reemplaza la ruta correcta

if (isset($_POST['generar_pdf'])) {
    $pdf = new TCPDF(); // Crea el objeto TCPDF

    $nombre_obra = $_POST['nombre_obra'];

    // Agregar la definición de fuente (si es necesario)
    $pdf->SetFont('dejavusans', 'B', 20);

    // Agregar el encabezado del documento
    $pdf->AddPage();
    $pdf->Image('tu_logo.jpg', 170, 15, 30); // Agrega el logo en la parte superior
    $pdf->SetFont('dejavusans', 'B', 20);
    $pdf->Cell(0, 10, '________________________', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Lista de Materiales', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Obra: ' . $nombre_obra, 0, 1, 'C');

    // Agregar la tabla de materiales
    $tabla = array(
        array('Material', 'Cantidad'),
    );

    if ($_POST['clavo'] > 0) {
        $tabla[] = array('Clavo', $_POST['clavo']);
    }

    if ($_POST['tuerca'] > 0) {
        $tabla[] = array('Tuerca', $_POST['tuerca']);
    }

    // Agrega más condiciones para otros materiales si es necesario
    // Ejemplo: if ($_POST['martillo'] > 0) { $tabla[] = array('Martillo', $_POST['martillo']); }

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
