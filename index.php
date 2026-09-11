<?php
require_once 'Elevador.php';
    $elevador = new Elevador();
    $elevador -> bloco="A";
    $elevador -> andarAtual=0;

    //Método
        $elevador->subirUmAndar();
        $elevador->subirUmAndar();
        $elevador->subirUmAndar();

            echo "Andar atual":. $elevador->andarAtual;
            ?>
