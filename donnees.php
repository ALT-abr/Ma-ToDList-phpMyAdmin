<?php
// Les données sont recréées à chaque requête. Une base de données viendra plus tard.
// $taches = [
//     ['id' => 1, 'titre' => 'Vérifier le serveur PHP', 'priorite' => 'haute', 'terminee' => true],
//     ['id' => 2, 'titre' => 'Afficher les tâches avec foreach', 'priorite' => 'haute', 'terminee' => false],
//     ['id' => 3, 'titre' => 'Créer une fonction de comptage', 'priorite' => 'moyenne', 'terminee' => false],
//     ['id' => 4, 'titre' => 'Séparer les fichiers de la page', 'priorite' => 'moyenne', 'terminee' => true],
//     ['id' => 5, 'titre' => 'Personnaliser les couleurs', 'priorite' => 'basse', 'terminee' => false],
// ];

require __DIR__ . '/connexion.php';

$etat = $_GET['etat'] ?? '';

if ($etat === ''){
    $requete = $pdo->query('SELECT id_tache as id, titre, priorite, statut as terminee FROM taches');
} else {
    $requete = $pdo-> prepare(
        'SELECT id_tache as id, titre, priorite, statut as terminee FROM taches WHERE terminee = :terminee'
    );
    $requete->execute([':terminee' => $etat === 'terminee' ? 1 : 0]);
}

$taches = $requete->fetchAll();