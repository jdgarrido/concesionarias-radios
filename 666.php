<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('America/Santiago');

/** Include PHPExcel_IOFactory */
require_once 'assets/classes/PHPExcel/IOFactory.php';

$objReader = new PHPExcel_Reader_Excel5();
//$objReader->setReadDataOnly(true);

$region = $idRegion = (isset($_GET['r'])) ? $_GET['r'] : '';
$n_region = '';

switch ($region) {
	case 1:
		$n_region = "de Tarapacá";
		break;
	case 2:
		$n_region = "de Antofagasta";
		break;
	case 3:
		$n_region = "de Atacama";
		break;
	case 4:
		$n_region = "de Coquimbo";
		break;
	case 5:
		$n_region = "de Valparaíso";
		break;
	case 6:
		$n_region = "del Libertador Gral. Bernardo O’Higgins";
		break;
	case 7:
		$n_region = "del Maule";
		break;
	case 8:
		$n_region = "del Biobío";
		break;
	case 9:
		$n_region = "de la Araucanía";
		break;
	case 10:
		$n_region = "de Los Lagos";
		break;
	case 11:
		$n_region = "de Aysén del Gral. Carlos Ibáñez del Campo";
		break;
	case 12:
		$n_region = "de Magallanes y de la Antártica Chilena";
		break;
	case 14:
		$n_region = "de Los Ríos";
		break;
	case 15:
		$n_region = "Arica y Parinacota";
		break;
	
	default:
		$n_region = "Metropolitana";
		$idRegion = 13;
		break;
}
$file = "assets/docs/Concesionarios Radio Marzo 2013.xls";
//$objPHPExcel = $objReader->load("assets/docs/1  Región_de_Tarapaca_1º_2013 v1.xlsx");
$objPHPExcel = $objReader->load($file);

$aData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
//print_r($aData);

$cnt = 1;
$menu = $ficha = '';
foreach($aData as $registro) {
	
	if($cnt>5) {
		if($idRegion == $registro['C']) {

			$menu .= '<li><a href="#'.$registro['A'].'"><i class="icon-chevron-right"></i> '.$registro['G'].' '.$registro['B'].' '.$registro['E'].'</a></li>';
			
		}
	}

	if($cnt>5) {
		if($idRegion == $registro['C']) {
			$ficha .= '
			<section id="'.$registro['A'].'">
				<div class="page-header">
					<h2>Radio '.$registro['G'].'</h2>
				</div>
				<h3>'.$registro['B'].' '.$registro['E'].'</h3>
				<div class="row">
					<div class="span3">
						<h3>Datos técnicos</h3>
						<p>Señal: '.$registro['A'].'</p>
						<p>Frecuencia: '.$registro['E'].'</p>
						<p>Potencia: '.$registro['F'].'</p>
						<p>Dec: '.$registro['J'].'</p>
					</div>
					<div class="span3">
						<h3>Datos concesionaria</h3>
						<p>Concesionaria: '.$registro['H'].'</p>
						<p>RUT: '.$registro['I'].'</p>
						<p>Fecha: '.$registro['K'].'</p>
					</div>
					<div class="span3">
						<h3>Datos oficinas</h3>
						<p>Estudio: '.$registro['L'].'</p>
						<p>Comuna: '.$registro['M'].'</p>
						<p>Planta: '.$registro['O'].'</p>
						<p>Comuna: '.$registro['P'].'</p>
					</div>
					<div class="span9">
						<a href="#top">volver</a>
					</div>
				</div>
	        </section>
	      
			';
		}
	}

	$cnt++;
}