<?php
require 'vendor/autoload.php';
require_once 'src/BuscadorDeCursos.php';

use Estudo\Composer\BuscadorCursos\BuscadorDeCursos;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$cliente = new Client(["base_uri" =>"https://www.alura.com.br"]);
$crawler = new Crawler();

$buscador = new BuscadorDeCursos($cliente, $crawler);
$cursos = $buscador->buscar("/cursos-online-programacao/php");

print_r($cursos);

