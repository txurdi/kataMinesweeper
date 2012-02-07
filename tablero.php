<?php


class tablero {
	

	public $ar_tablero= array();
	
	function __construct($str_tablero) {
		$ar_lineas = explode('|',$str_tablero);
		foreach ($ar_lineas as $indice => $linea) {
			$this->ar_tablero[$indice] = explode(',', $linea);
		}
	}
}
?>