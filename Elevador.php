<?php

class Elevador
{
    public int $andarAtual;
    public string $bloco;

    public function subirUmAndar(): void
    {
        $this->andarAtual++;
    }

    public function descerUmAndar(): void
    {
        $this->andarAtual--;
    }
}
?>