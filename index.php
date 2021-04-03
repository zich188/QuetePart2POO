<?php

require "truck.php";

//Creation objet camion1 de la class Truck (choisir couleur,nb de siege, capacité de chargement, et energy(obligatoire electric ou fuel a cause de la Const))
$camion1 = new Truck('blue', 3, 100,'fuel');

echo "Le camion à une couleur " .$camion1->getColor() ." , un nombre de  " .$camion1->getNbSeats() ." places " . "et roule en " .$camion1->getEnergy()."<br/>";
echo "La capacité maxi de son chargement est de " .$camion1->getCapacity() . " tonnes"."<br/>";
echo $camion1->setLoading(50);
echo "Le camion est chargé à " .$camion1->getLoading() ." tonnes" ." il est donc en " .$camion1->truckIsFull() ."<br/>";
echo $camion1->setLoading(100);
echo "Le camion est chargé à " .$camion1->getLoading() ." tonnes" ." il est donc en " .$camion1->truckIsFull();

echo "<br/>";
echo "<br/>";

//Creation nouvel objet truck2 de la class Truck
$truck2 = new Truck("dark",2,500,"electric");

//choix de la vitesse.
$truck2->setCurrentSpeed(50);
$truck2->setLoading(450);

//chargement du camion
echo "Le camion est chargé à " .$truck2->getLoading() ." tonnes" ." il est donc en " .$truck2->truckIsFull() ."<br/>";
//Go
echo "Le camion démarre " .$truck2->forward() ."<br/>";
//Affiche la vitesse
echo "Il roule à " .$truck2->getCurrentSpeed() ." mph" ."<br/>";
//Freine jusqu'à stoppé
echo "Freinage sec : " .$truck2->brake();
