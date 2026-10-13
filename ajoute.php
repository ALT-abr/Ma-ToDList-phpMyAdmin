<?phph
    require __DIR__ . '/connexion.php';

    if ($_SERVER['REQUEST_METHOD'] === $_POST){
        $titre = trim($_POST['titre']);
        $priorite = $_POST['priorite'];

        if ($titre === "" || !in_array($priorite, ['haut', 'moyenne', 'bas'], true)){
            exit("donnees invalides")
        }

        $requete = $pdo->prepare(
            INSERT INTO taches (titre, priorite, statut)
                values (:titre, :priorite, 0);
        );

        $requete->execute([
            'titre' => $titre,
            'priorite' => $priorite
        ]);

        exist;
    }
?>