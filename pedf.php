<?php 
require_once __DIR__ . '/vendor/autoload.php';

session_start();


$presu = $_POST['codigo-presupuesto'];
$cliente = $_POST['nombre-cliente'];
$fechaEmision = $_POST['fechaEmision'];
$fechaVenc = $_POST['fechaVenc'];
$p1 = $_POST['paquete-1'];
$p2 = $_POST['paquete-2'];
$p3 = $_POST['paquete-3'];
$mail = $_POST['correo'];

$pp1 = 4000;
$pp2 = 6000;
$pp3 = 8000;

//validar precio para paquete estandar

if($p1 == '3'){
	$pt1 = $pp1*3;
}
else if ($p1 == '6'){
	$pt1 = $pp1*6;
}
else{
	$pt1 = 0;
}

//validar precio para paquete ultra

if($p2 == '2'){
	$pt2 = $pp2*2;
}
else if ($p2 == '4'){
	$pt2 = $pp2*4;
}
else if ($p2 == '6'){
	$pt2 = $pp2*6;
}
else{
	$pt2 = 0;
}

//validar precio para paquete master

if($p3 == '1'){
	$pt3 = $pp3;
}
else if ($p3 == '2'){
	$pt3 = $pp3*2;
}
else if ($p3 == '3'){
	$pt3 = $pp3*3;
}
else if ($p3 == '4'){
	$pt3 = $pp3*4;
}
else if ($p3 == '5'){
	$pt3 = $pp3*5;
}
else if ($p3 == '6'){
	$pt3 = $pp3*6;
}
else{
	$pt3 = 0;
}

$pt = $pt1+$pt2+$pt3;
$d=' BsF';
      
$mpdf=new mPDF(); 
 
$html= file_get_contents('C:\xampp\htdocs\titan\algo.html');

$html = str_replace("{{presu}}", $presu, $html);
$html = str_replace("{{cliente}}", $cliente, $html);
$html = str_replace("{{mail}}", $mail, $html);
$html = str_replace("{{fechaEmision}}", $fechaEmision, $html);
$html = str_replace("{{fechaVenc}}", $fechaVenc, $html);

$html = str_replace("{{p1}}", $p1, $html);
$html = str_replace("{{pp1}}", $pp1.$d, $html);
$html = str_replace("{{pt1}}", $pt1.$d, $html);

$html = str_replace("{{p2}}", $p2, $html);
$html = str_replace("{{pp2}}", $pp2.$d, $html);
$html = str_replace("{{pt2}}", $pt2.$d, $html);

$html = str_replace("{{p3}}", $p3, $html);
$html = str_replace("{{pp3}}", $pp3.$d, $html);
$html = str_replace("{{pt3}}", $pt3.$d, $html);

$html = str_replace("{{pt}}", $pt.$d, $html);


$mpdf->SetHeader('|Center Text|');
$mpdf->defaultheaderline=0;
$mpdf->WriteHTML($html);
         
$mpdf->Output();

?>

