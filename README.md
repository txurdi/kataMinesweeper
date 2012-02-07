KataMinesweeper (2nd kata)
==========================
7 de Febrero de 2012.


## ¿Qué es esto?
Una tarde en la que @el_y0rtx y @txurdi decidimos empezar a cambiar nuestra forma de programar. Queremos hacer las cosas bien, 
queremos aprender a usar TDD y que mejor que empezar con una kata. La idea la sacamos de [Katayunos](http://katayunos.com/)

## Kata elegida: KataMinesweeper
Dado un tablero del conocido juego Buscaminas en el siguiente formato: "*,.,.,.|.,.,.,.|.,*,.,.|.,.,.,." donde los * son minas, 
los . son casillas en blanco rellenar las casillas y las | indican un cambio de linea con numeros que indiquen las minas que 
hay en casillas adyacentes siguiendo el formato indicado a continuacion: *100|2210|1*10|1110
[Kata en codingdojo.org](http://codingdojo.org/cgi-bin/wiki.pl?KataMinesweeper)
NOTA: Hemos decidido emplear arrays para la resolución del problema porque queríamos entrenar el uso de éstos.

## División del problema en pequeñas soluciones: (test)
- Si nos dan * devolvemos *
- Si nos dan . devolvemos 0
- Si nos dan .,. devolvemos 00
- Si nos dan *,. devolvemos *1
- ...
- Si nos dan "*,.,.,.|.,.,.,.|.,*,.,.|.,.,.,." devolvemos *100|2210|1*10|1110
- ...
- Creamos una batería de pruebas con las combinaciones que nos pueden parecer conflictivas.

## Conclusiones:
- En la anterior decíamos que "No hemos guardado las versiones del programa según hacíamos los test, prometemos hacerlo en la siguiente kata!". Esta vez lo hemos hecho copiando los metodos y añadiendo _XX del número de test. Para la próxima lo haremos con versiones de GIT.


## Autores
- En [@SocSoft](http://twitter.com/SocSoft):
- Jorge García [@el_y0rtx](http://twitter.com/el_y0rtx)
- Igor Ormaetxebarria [@txurdi](http://twitter.com/txurdi)


## Katas anteriores
- [1st Kata en GitHub](https://github.com/txurdi/KataRomanNumeralsPHP)
