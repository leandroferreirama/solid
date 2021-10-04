<?php

namespace Alura\Solid\Service;

class Assistidor
{
    public function assistir(Assistivel $conteudo){
        $conteudo->assistir();
    }
}
