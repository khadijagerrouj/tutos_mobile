<?php
    require_once "Categorie.php";
    class GestionCategorie{

        public function getAll():array{
            return [
            new Categorie(1,"Web"),
            new Categorie(2,"Design")
            ];
        }
    }
?>