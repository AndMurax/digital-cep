<?php 

require_once("vendor/autoload.php");
use Andmurax\DigitalCep\Search;


$buscar = new Search;

$resultado = $buscar->getAddressFromZipcode('41308325');

print_r($resultado);


?>