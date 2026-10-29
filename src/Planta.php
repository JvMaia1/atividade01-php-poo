<?php

class Planta {

    private string $nome;
    private string $especie;
    private float $aguaDiaria;

    public function __construct(string $nome, string $especie, float $aguaDiaria)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->aguaDiaria = $aguaDiaria;        
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEspecie(): string {
        return $this->especie;
    }

    public function getAguaPorDia(): float {
       return $this->aguaDiaria;
    }

    public function calcularAguaSemanal(): float {
          return $this->aguaDiaria*7;
    }
}