<?php
/**
* SumaTiempos.php Clase para sumar tiempos
*
* Esta clase sirve para teniendo un tiempo inicial y un Array con tiempos
* los suma y nos devuelve el tiempo final
*
* PHP Version 5.3
*
* @author Ruben Lacasa Mas <ruben@rubenlacasa.es>
* @copyright 2013 Ruben Lacasa Mas http://rubenlacasa.es
* @license http://creativecommons.org/licenses/by-nc-nd/3.0
* CC-BY-NC-ND-3.0
* @link https://gist.github.com/sbarrat/5642808
*/
class SumaTiempos
{
/**
* Inicializamos el array que almacenara los valores del tiempo
* @var Array
*/
private $tiempo = array();
/**
* Constructor de clase
*
* @param String $tiempo Tiempo que definimos
*/
public function __construct($tiempo = '00:00:00.00')
{
list(
$this->tiempo['horas'],
$this->tiempo['minutos'],
$this->tiempo['segundos']
) = explode(":", $tiempo);
}
/**
* Sumamos el tiempo a otro
*
* @param SumaTiempos $tiempo Tiempo que queremos agregar
*/
public function sumaTiempo(SumaTiempos $tiempo)
{
// Segundos
$this->tiempo['segundos']
= floatval($this->tiempo['segundos'])
+ floatval($tiempo->tiempo['segundos']);
$minutos = intval($this->tiempo['segundos'] / 60);
$this->tiempo['segundos'] -= $minutos * 60;
// Minutos
$this->tiempo['minutos']
= intval($this->tiempo['minutos'])
+ intval($tiempo->tiempo['minutos'] + $minutos);
$horas = intval($this->tiempo['minutos'] / 60);
$this->tiempo['minutos'] -= $horas * 60;
// Horas
$this->tiempo['horas']
= intval($this->tiempo['horas'])
+ intval($tiempo->tiempo['horas'] + $horas);
}
/**
* Formatea y devuelve el tiempo final
*
* @return String Tiempo final formateado
*/
public function verTiempoFinal()
{
return sprintf(
'%02s:%02s:%02s',
$this->tiempo['horas'],
$this->tiempo['minutos'],
$this->tiempo['segundos']
);
}
}
/**
* Ejemplo de uso
*/
 
/**
* Array de tiempos que queremos sumar
* @var Array
*/
$tiempos = array('10:21:54', '01:12:44', '20:01:12', '00:28:19');
// Inicializamos el tiempo
$tiempoInicial = new SumaTiempos();
// Recorremos los tiempos y los vamos sumando
foreach ($tiempos as $parcial) {
$tiempoInicial->sumaTiempo(new SumaTiempos($parcial));
}
// Mostramos el tiempo final
echo $tiempoInicial->verTiempoFinal(); // En este ejemplo 32:04:10.40