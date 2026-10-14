
<?php
require_once __DIR__ . '/../../backend/classes/GestionCategorie.php';

class CategorieController {
    public function listerCategories(): void {
        $gestion = new GestionCategorie();
        $categories = $gestion->getAll();

        echo "<h1>Liste des catégories</h1>";

        if (empty($categories)) {
            echo "<p>Aucune catégorie trouvée.</p>";
            return;
        }

        foreach ($categories as $cat) {
            echo "<p>" . $cat->getNom() . "</p>";
        }
    }
}

$controller = new CategorieController();
$controller->listerCategories();
?>

