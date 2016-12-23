<?php
    include 'init.php';    
    require_once("{$_GLOBAL_ROOT_PATH}/mpdf60/mpdf.php");

    $lang = $_GET['idioma'];
    
    $html = file_get_contents("{$_GLOBAL_ROOT_URL}/template.php?action=print&idioma={$lang}");
    $css1 = file_get_contents("{$_GLOBAL_ROOT_URL}/font-awesome-4.7.0/css/font-awesome.min.css");
    $css2 = file_get_contents("{$_GLOBAL_ROOT_URL}/css/curriculo.css");

    $mpdf = new mPDF();
    $mpdf->SetDisplayMode('fullpage');    
    $mpdf->WriteHTML($css1,1);
    $mpdf->WriteHTML($css2,1);
    $mpdf->WriteHTML($html);
    $mpdf->Output();

    exit;
?>