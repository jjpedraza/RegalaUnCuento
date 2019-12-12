
<?php

    require('pdf/tcpdf.php');    
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->setPrintHeader(false);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);    
    
    
    $pdf->AddPage('P'); //en la tabla de reporte L o P

    //VARIABLES DE ESTILOS                   
    // $styleqr = array(
    //     'border' => true,
    //     'vpadding' => 'auto',
    //     'hpadding' => 'auto',
    //     'fgcolor' => array(0,0,0),
    //     'bgcolor' => false, //array(255,255,255)
    //     'module_width' => 1, // width of a single module in points
    //     'module_height' => 1 // height of a single module in points
    // );


    // Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
    //     El resumen de los parámetros aceptados por la función:
    //     file: nombre del archivo de la imagen.
    //     x: Abscisa de la esquina superior izquierda. Si no se especifica se utilizará la abscisa actual.
    //     y: Ordenada de la esquina superior izquierda. Si no se especifica se utilizará la ordenada actual.
    //     w: Ancho de la imagen en la página.
    //     h: Alto de la imagen en la página.
    //     type:Formato de la imagen.
    //     link: identificador devuelto por el método AddLink() o la url del enlace.


    $pdf->SetXY(0, 0);
    // $pdf->Image('img/wall2.jpg', '0', '0', 500, 500, '', '', 'T', false, 00, '', false, false, 0, false, false, false);    
    // $pdf->Image('img/wall2.jpg', '0', '0', 500, 500);
    $pdf->Image('img/wall2.jpg', '0', '0',210);
    $pdf->Image('img/rana.png', '50', '70',50);

    // $pdf->Image('img/rana.png', '10', '10', 500, 50, '', '', 'T', false, 00, '', false, false, 0, false, false, false);    

    $pdf->SetFont('dejavusans', '', 7);    
    $pdf->SetFont('', 'R', 20, '', 'false');
    $pdf->Text(10, 100, "dejavusans 1");

    $pdf->SetFont('aealarabiya', '', 7);    
    $pdf->SetFont('', 'R', 20, '', 'false');
    $pdf->Text(10, 120, "aealarabiya 1");

    $pdf->SetFont('aefurat', '', 7);    
    $pdf->SetFont('', 'R', 40, '', 'false');
    $pdf->Text(10, 140, "aefurat 1");

    
    // Añadir fuente
    $fontname = TCPDF_FONTS::addTTFfont('pdf/fonts/Ye Olde Oak.ttf', 'TrueTypeUnicode', '', 96); 

    // use the font 
    $pdf->SetFont($fontname, '', 14, '', false); 
    $pdf->Text(10, 160, "Ye Olde Oak");



    // $parrafo1 = "<p align=justify style=''>
    //     test en html/b>.
    // </p>";
    // $pdf->SetFont('', 'R', 10, '', 'false');
	// $pdf->writeHTMLCell(175, 10, 20, 70, $parrafo1, 0, 0, 0, '', 'J', '');

    $pdf->lastPage();
    ob_end_clean();
    $pdf->Output('reporte.pdf', 'I');    




?>