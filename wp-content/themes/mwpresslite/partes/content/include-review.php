<?php 



$value1 = redux_post_meta( "mwpress_opt", get_the_ID(), "value_criterio1" ); 
$value2 = redux_post_meta( "mwpress_opt", get_the_ID(), "value_criterio2" ); 
$value3 = redux_post_meta( "mwpress_opt", get_the_ID(), "value_criterio3" ); 
$value4 = redux_post_meta( "mwpress_opt", get_the_ID(), "value_criterio4" ); 
$value5 = redux_post_meta( "mwpress_opt", get_the_ID(), "value_criterio5" ); 
$value6 = redux_post_meta( "mwpress_opt", get_the_ID(), "value_criterio6" ); 

$txt1 = redux_post_meta( "mwpress_opt", get_the_ID(), "txt_criterio1" ); 
$txt2 = redux_post_meta( "mwpress_opt", get_the_ID(), "txt_criterio2" ); 
$txt3 = redux_post_meta( "mwpress_opt", get_the_ID(), "txt_criterio3" ); 
$txt4 = redux_post_meta( "mwpress_opt", get_the_ID(), "txt_criterio4" ); 
$txt5 = redux_post_meta( "mwpress_opt", get_the_ID(), "txt_criterio5" ); 
$txt6 = redux_post_meta( "mwpress_opt", get_the_ID(), "txt_criterio6" ); 

if ($value1 == 10.0) {
	$value1 = 10; 
}
if ($value2 == 10.0) {
	$value2 = 10; 
}
if ($value3 == 10.0) {
	$value3 = 10; 
}
if ($value4 == 10.0) {
	$value4 = 10; 
}
if ($value4 == 10.0) {
	$value5 = 10; 
}
if ($value6 == 10.0) {
	$value6 = 10; 
}

if($txt1 != ""){$valor1 = $value1; $divisor1 = 1;} else {$valor1 = 0; $divisor1 = 0;}
if($txt2 != ""){$valor2 = $value2; $divisor2 = 1;} else {$valor2 = 0; $divisor2 = 0;}
if($txt3 != ""){$valor3 = $value3; $divisor3 = 1;} else {$valor3 = 0; $divisor3 = 0;}
if($txt4 != ""){$valor4 = $value4; $divisor4 = 1;} else {$valor4 = 0; $divisor4 = 0;}
if($txt5 != ""){$valor5 = $value5; $divisor5 = 1;} else {$valor5 = 0; $divisor5 = 0;}
if($txt6 != ""){$valor6 = $value6; $divisor6 = 1;} else {$valor6 = 0; $divisor6 = 0;}

$valoresgeral = $valor1+$valor2+$valor3+$valor4+$valor5+$valor6;
$divisoresgeral = $divisor1+$divisor2+$divisor3+$divisor4+$divisor5+$divisor6;
$mediageral = $valoresgeral/$divisoresgeral; 
$mediaG = round($mediageral, 1);
?>