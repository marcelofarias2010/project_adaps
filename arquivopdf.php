<?php
require  './composer/vendor/autoload.php' ;

// referencie o namespace Dompdf 
use  Dompdf\Dompdf ;

// instancia e usa a classe dompdf 
$dompdf = new  Dompdf();
$dompdf->loadHtml('olá mundo');

// (Opcional) Configure o tamanho e a orientação do papel 
$dompdf->setPaper('A4','landscape');

// Renderiza o HTML como PDF 
$dompdf->render();

// Saída do PDF gerado para o navegador 
$dompdf -> stream ();