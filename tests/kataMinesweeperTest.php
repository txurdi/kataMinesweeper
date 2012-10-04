<?php
include_once "../kataMinesweeper.php";


class kataMinesweeperTest extends PHPUnit_Framework_TestCase {
	
   /**
     * @dataProvider bateria
     */
    public function testaJuegoBuscaMinas($a, $tablero)
    {
		$obj = new kataMinesweeper();
        $this->assertEquals($a, $obj->resuelve_tablero($tablero));
    }
 
    public function bateria()
    {
    	$obj_tablero01 = new tablero('*');
		$obj_tablero02 = new tablero('.');
		$obj_tablero03 = new tablero('.,.');
		$obj_tablero04 = new tablero('.,.,.');
		$obj_tablero05 = new tablero('.,.|.,.');
		$obj_tablero06 = new tablero('.,.,.|.,.,.|.,.,.|.,.,.');
		$obj_tablero07 = new tablero('.,*');
		$obj_tablero08 = new tablero('*,.');
		$obj_tablero09 = new tablero('*,*');
		$obj_tablero10 = new tablero('*,.,*');
		$obj_tablero11 = new tablero('.,*,.');
		$obj_tablero12 = new tablero('*,.|.,.');
		
		$obj_tablero13 = new tablero('*,.,.,.|.,.,.,.|.,*,.,.|.,.,.,.');
		$obj_tablero14 = new tablero('*,*,.,.,.|.,.,.,.,.|.,*,.,.,.');
    	$obj_tablero15 = new tablero('.,.,*,.,*|.,*,*,.,.');
		
		return array(
        	array('*',$obj_tablero01),
			array('0',$obj_tablero02),
			array('00',$obj_tablero03),
			array('000',$obj_tablero04),
			array('00|00',$obj_tablero05),
			array('000|000|000|000', $obj_tablero06),
			array('1*', $obj_tablero07),
			array('*1', $obj_tablero08),
			array('**', $obj_tablero09),
			array('*2*', $obj_tablero10),
			array('1*1', $obj_tablero11),
			array('*1|11', $obj_tablero12),
          	array('*100|2210|1*10|1110', $obj_tablero13),
         	array('**100|33200|1*100', $obj_tablero14),
      		array('13*3*|1**31', $obj_tablero15)
        );
    }
}
/*$obj_tablero1 = new tablero(4,4,array(
		    	'linea1'=>array('columna1'=>'*',
								'columna2'=>'.',
								'columna3'=>'.',
								'columna4'=>'.'
								),
		    	'linea2'=>array('columna1'=>'.',
								'columna2'=>'.',
								'columna3'=>'.',
								'columna4'=>'.'
								),
		    	'linea3'=>array('columna1'=>'.',
								'columna2'=>'*',
								'columna3'=>'.',
								'columna4'=>'.'
								),
		    	'linea4'=>array('columna1'=>'.',
								'columna2'=>'.',
								'columna3'=>'.',
								'columna4'=>'.'
				)
		));
		$obj_tablero2 = new tablero(3,5,array(
		    	'linea1'=>array('columna1'=>'*',
								'columna2'=>'*',
								'columna3'=>'.',
								'columna4'=>'.',
								'columna5'=>'.'
								),
		    	'linea2'=>array('columna1'=>'.',
								'columna2'=>'.',
								'columna3'=>'.',
								'columna4'=>'.',
								'columna5'=>'.'
								),
		    	'linea3'=>array('columna1'=>'.',
								'columna2'=>'*',
								'columna3'=>'.',
								'columna4'=>'.',
								'columna5'=>'.'
								)
		));
		$obj_tablero3 = new tablero(2,5,array(
		    	'linea1'=>array('columna1'=>'.',
								'columna2'=>'.',
								'columna3'=>'*',
								'columna4'=>'.',
								'columna5'=>'*'
								),
		    	'linea2'=>array('columna1'=>'.',
								'columna2'=>'*',
								'columna3'=>'*',
								'columna4'=>'.',
								'columna5'=>'.'
								)
		));*/
?>