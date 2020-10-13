<?php

class Movie {
    //elukovan genre. esim. scifi, kauhu, komedia jne
    public string $genre;
    // elokuvan kesto tunneissa.
    public float $kesto;
    // elokuvan julkaisuvuosi
    public int $vuosi;
    //elokuvan ikäraja
    public int $ikaraja;
    // pääosan esittäjät
    public array $nayttelijat;


}
$uuno = new Movie();
$uuno->genre = 'Komedia';
$uuno->kesto = 1.5;
$uuno->vuosi = 1995;
$uuno¨->ikaraja = 7;
$uuno->nayttelijat = ['Vesku Loiri','Spede Pasanen'];