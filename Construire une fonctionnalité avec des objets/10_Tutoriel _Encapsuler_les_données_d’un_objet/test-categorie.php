<?php

require_once "backend/categorie.php";

$categorie = new Categorie(1, "Informatique");

echo $categorie->getNom();

$categorie->setNom("Développement Web");

echo "<br>";
echo $categorie->getNom();