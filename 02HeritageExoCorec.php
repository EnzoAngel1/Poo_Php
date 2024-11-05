<?php

declare(strict_types=1);


// Création d'une classe Vehicule qui contient les propriétés et méthodes communes à tous les véhicules
class Vehicule
{

    // Propriétés communes à tous les véhicules (promotion de constructeur)
    public function __construct(public string $marque, public string $couleur, public string $modele) {}

    // Méthodes communes à tous les véhicules
    public function seDeplacer(): void
    {
        echo "Le véhicule se déplace";
    }

    public function demarrer(): void
    {
        echo "Le véhicule démarre";
    }

    public function arreter(): void
    {
        echo "Le véhicule s'arrête";
    }
}


// Création d'une classe Voiture qui hérite de la classe Vehicule donc hérite de ses propriétés et méthodes
class Voiture extends Vehicule
{

    // Ajout de propriétés spécifiques à la voiture (volant et portes) et initialisation de ces propriétés depuis le constructeur du parent
    public function __construct(string $marque, string $couleur, string $modele, private int $volant, private int $portes)
    {
        // Appel du constructeur de la classe parente
        parent::__construct($marque, $couleur, $modele);
    }


    // Ajout de méthodes spécifiques à la voiture
    public function ouvrirCoffre(): void
    {
        echo "Le coffre de la voiture est ouvert";
    }
}


// Création d'une classe Moto qui hérite de la classe Vehicule donc hérite de ses propriétés et méthodes
class Moto extends Vehicule
{

    // redéfinition de la méthode seDeplacer() pour la moto (polymorphisme)
    public function seDeplacer(): void
    {
        echo "La moto se déplace rapidement";
    }
}

$voiture = new Voiture("Peugeot", "Rouge", "208", 1, 5);
$voiture->seDeplacer();
$voiture->ouvrirCoffre();

$moto = new Moto("Yamaha", "Noir", "MT-07");
$moto->seDeplacer();
