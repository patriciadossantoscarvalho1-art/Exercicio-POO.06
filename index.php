<?php

require_once "Elevador.php";

$elevador = new Elevador();

$elevador->bloco = "A";
$elevador->andarAtual = 0;

// Sobe três andares
$elevador->subirUmAndar();
$elevador->subirUmAndar();
$elevador->subirUmAndar();

// Exibe o andar atual
echo "Andar atual: " . $elevador->andarAtual;

?>