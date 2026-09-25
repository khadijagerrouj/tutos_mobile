<?php

require_once "Categorie.php";

$cat1 = new Categorie(1, "PHP", "Bleu", "🐘");

$cat2 = new Categorie(2, "JavaScript", "Jaune", "⚡");

$cat1->afficher();
$cat2->afficher();