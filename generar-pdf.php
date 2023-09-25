<?php
require_once 'tcpdf.php'; // Reemplaza la ruta correcta

if (isset($_POST['generar_pdf'])) {
    $clavo = $_POST['clavo'];
    $tuerca = $_POST['tuerca'];

    // Crear un nuevo documento PDF
    $pdf = new TCPDF();

    // Agregar el encabezado del documento
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Lista de Materiales', 0, 1, 'C');

    // Agregar la lista de materiales
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, 'Material', 1, 0, 'C');
    $pdf->Cell(40, 10, 'Cantidad', 1, 1, 'C');
    $pdf->Cell(40, 10, 'Clavo', 1, 0, 'C');
    $pdf->Cell(40, 10, $clavo, 1, 1, 'C');
    $pdf->Cell(40, 10, 'Tuerca', 1, 0, 'C');
    $pdf->Cell(40, 10, $tuerca, 1, 1, 'C');

    // Generar el PDF y mostrarlo en el navegador
    $pdf->Output('lista-materiales.pdf', 'D');
}
?>
