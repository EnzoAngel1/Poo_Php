<?php
// Exo - Héritage
// Exercice : Gestion de véhicules

// 1. Création de la classe de base Vehicule :
// Créez une classe Vehicule avec les propriétés publiques suivantes : couleur, modele.
// Ajoutez une méthode marque, seDeplacer() qui affiche simplement "Le véhicule se déplace".
// Ajoutez également des méthodes demarrer() et arreter() pour simuler le démarrage et l'arrêt d'un véhicule en affichant les messages appropriés.

// 2. Création de la classe dérivée Voiture :
// Créez une classe Voiture qui hérite de la classe Vehicule.
// Ajoutez à Voiture les propriétés spécifiques volant et portes.
// Ajoutez une méthode ouvrirCoffre() qui affiche "Le coffre de la voiture est ouvert".

// 3. Polymorphisme :
// Créez une autre classe Moto qui hérite également de Vehicule.
// Dans cette classe, redéfinissez la méthode seDeplacer() pour afficher "La moto se déplace rapidement".

// 4. Utilisation des classes :
// Créez un objet Voiture et un objet Moto.
// Appelez les méthodes seDeplacer() sur les deux objets pour observer le polymorphisme en action.

// 5. Affichage des objets :
// Affichez les propriétés de chaque objet et les valeurs par défaut ou assignées lors de l'instanciation.


class Vehicule
{
    // constructeur du parent qui prend un  paramètre model et couleur
    public function __construct(public string $model, public string $couleur, public string $marque) {}

    //méthode que mes objets enfants pourront hérité
    private function seDeplacer(): void
    {
        echo 'Le véhicule se déplace';
    }
    private function demarrer(): void
    {
        echo 'Le véhicule démarre';
    }

    private function arreter(): void
    {
        echo 'Le véhicule démarre';
    }
}

class Voiture extends Vehicule
{
    public function __construct(public string $model, public string $couleur,public string $marque,public string $volant, public string $portes)
    {
        parent::__construct($model);
        parent::__construct($couleur);
        parent::__construct($marque);
    }
    public function ouvrirCoffre()
    {
        echo 'Le coffre de la voiture est ouvert';
    }
}
