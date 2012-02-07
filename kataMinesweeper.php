<?php
include_once "tablero.php";

class kataMinesweeper {
	private $ar_resultado = array();
	
	function __construct() {
		
	}
	
	private function sumasidebes($indice_linea,$indice_columna) {
		if ((isset($this->ar_resultado[$indice_linea][$indice_columna])) && 
			($this->ar_resultado[$indice_linea][$indice_columna]!=='*')) {
			$this->ar_resultado[$indice_linea][$indice_columna]+=1;
		}
	}
	
	function resuelve_tablero($tablero) {
		$resultado = '';
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna==='.') {
					$tablero->ar_tablero[$indice_linea][$indice_columna] = 0;
					$this->ar_resultado[$indice_linea][$indice_columna] = '0';
				} else {
					$this->ar_resultado[$indice_linea][$indice_columna] = '*';
				}			
			}
		}
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna==='*') {
					$this->ar_resultado[$indice_linea][$indice_columna] = '*';
					//aumentar arriba
					$this->sumasidebes($indice_linea-1,$indice_columna-1);
					$this->sumasidebes($indice_linea-1,$indice_columna);
					$this->sumasidebes($indice_linea-1,$indice_columna+1);
					//aumentar actual
					$this->sumasidebes($indice_linea,$indice_columna-1);
					$this->sumasidebes($indice_linea,$indice_columna+1);
					//aumentar debajo
					$this->sumasidebes($indice_linea+1,$indice_columna-1);
					$this->sumasidebes($indice_linea+1,$indice_columna);
					$this->sumasidebes($indice_linea+1,$indice_columna+1);
				}				
			}
		}		
		foreach ($this->ar_resultado as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				$resultado .= $valor_columna;
			}
			$resultado .= '|';
		}
		
		return substr($resultado, 0, -1);
	}
	

	
	function resuelve_tablero_09_10_11_refactorizada($tablero) {
		$resultado = '';
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna==='.') {
					$tablero->ar_tablero[$indice_linea][$indice_columna] = 0;
					$this->ar_resultado[$indice_linea][$indice_columna] = '0';
				} else {
					$this->ar_resultado[$indice_linea][$indice_columna] = '*';
				}			
			}
		}
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna==='*') {
					$this->ar_resultado[$indice_linea][$indice_columna] = '*';
					//aumentar los cercanos en 1
					$this->sumasidebes($indice_linea,$indice_columna-1);
					$this->sumasidebes($indice_linea,$indice_columna+1);
				}				
			}
		}		
		foreach ($this->ar_resultado as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				$resultado .= $valor_columna;
			}
			$resultado .= '|';
		}
		
		return substr($resultado, 0, -1);
	}
	private function sumasidebes_09_10_11_refactorizada($indice_linea,$indice_columna) {
		if ((isset($this->ar_resultado[$indice_linea][$indice_columna])) && 
			($this->ar_resultado[$indice_linea][$indice_columna]!=='*')) {
			$this->ar_resultado[$indice_linea][$indice_columna]+=1;
		}
	}
	function resuelve_tablero_09_10_11($tablero) {
		$resultado = '';
		$ar_resultado = array();
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna==='.') {
					$tablero->ar_tablero[$indice_linea][$indice_columna] = 0;
					$ar_resultado[$indice_linea][$indice_columna] = '0';
				} else {
					$ar_resultado[$indice_linea][$indice_columna] = '*';
				}			
			}
		}
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna==='*') {
					$ar_resultado[$indice_linea][$indice_columna] = '*';
					//aumentar los cercanos en 1
					if ((isset($ar_resultado[$indice_linea][$indice_columna-1])) && 
						($ar_resultado[$indice_linea][$indice_columna-1]!=='*')) {
						$ar_resultado[$indice_linea][$indice_columna-1]+=1;
					}
					if ((isset($ar_resultado[$indice_linea][$indice_columna+1])) && 
						($ar_resultado[$indice_linea][$indice_columna+1]!=='*')) {
						$ar_resultado[$indice_linea][$indice_columna+1]+=1;
					}
				}				
			}
		}		
		foreach ($ar_resultado as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				$resultado .= $valor_columna;
			}
			$resultado .= '|';
		}
		
		return substr($resultado, 0, -1);
	}	
	function resuelve_tablero_08($tablero) {
		$resultado = '';
		$ar_resultado = array();
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna==='.') {
					$tablero->ar_tablero[$indice_linea][$indice_columna] = 0;
					$ar_resultado[$indice_linea][$indice_columna] = '0';
				} else {
					$ar_resultado[$indice_linea][$indice_columna] = '*';
				}			
			}
		}
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna==='*') {
					$ar_resultado[$indice_linea][$indice_columna] = '*';
					//aumentar los cercanos en 1
					if (isset($ar_resultado[$indice_linea][$indice_columna-1])){
						$ar_resultado[$indice_linea][$indice_columna-1]+=1;
					}
					if (isset($ar_resultado[$indice_linea][$indice_columna+1])){
						$ar_resultado[$indice_linea][$indice_columna+1]+=1;
					}
				}				
			}
		}		
		foreach ($ar_resultado as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				$resultado .= $valor_columna;
			}
			$resultado .= '|';
		}
		
		return substr($resultado, 0, -1);
	}
	function resuelve_tablero_07($tablero) {
		$resultado = '';
		$ar_resultado = array();
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna=='.') {
					$ar_resultado[$indice_linea][$indice_columna] = 0;
				} else {
					$ar_resultado[$indice_linea][$indice_columna] = '*';
					//aumentar los cercanos en 1
					if (isset($ar_resultado[$indice_linea][$indice_columna-1])){
						$ar_resultado[$indice_linea][$indice_columna-1]+=1;
					}
					if (isset($ar_resultado[$indice_linea][$indice_columna+1])){
						$ar_resultado[$indice_linea][$indice_columna+1]+=1;
					}
				}				
			}
		}		
		foreach ($ar_resultado as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				$resultado .= $valor_columna;
			}
			$resultado .= '|';
		}
		
		return substr($resultado, 0, -1);
	}
	function resuelve_tablero_05_06($tablero) {
		$resultado = '';
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna=='.') {
					$resultado .= '0';
				} else {
					$resultado .= '*';
				}				
			}
			$resultado .= '|';
		}
		return substr($resultado, 0, -1);
	}
	function resuelve_tablero_03_04($tablero) {
		$resultado = '';
		foreach ($tablero->ar_tablero as $indice_linea => $linea) {
			foreach ($linea as $indice_columna => $valor_columna) {
				if ($valor_columna=='.') {
					$resultado .= '0';
				} else {
					$resultado .= '*';
				}				
			}
		}
		return $resultado;
	}
	function resuelve_tablero_02($tablero) {
		if ($tablero->a_texto()==='.') {
			return '0';
		}
		else return '*';		
	}
	function resuelve_tablero_01($tablero) {
		return '*';
		
	}
	
	
}
?>