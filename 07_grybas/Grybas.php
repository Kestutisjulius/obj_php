<?php

class Grybas
{
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct()
    {
        $this->valgomas = rand(0,1);
        $this->sukirmijes = rand(0,1);
        $this->svoris = rand(5,45);
    }


    public function getValgomas(): bool
    {
        return $this->valgomas;
    }

    public function getSukirmijes(): bool
    {
        return $this->sukirmijes;
    }

    public function getSvoris(): int
    {
        return $this->svoris;
    }
}