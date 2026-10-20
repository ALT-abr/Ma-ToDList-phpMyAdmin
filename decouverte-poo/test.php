<?php

require __DIR__ . '/Tache.php';

$tache1 = new Tache('Préparer la présentation');
$tache2 = new Tache('Tester le formulaire');

$tache1->terminer();

var_dump($tache1);
var_dump($tache2);

$tab = [
    $tache1,
    $tache2
]
?>

<ul>
    <?php foreach($tab as $tach): ?>
    <li>
        <?php echo htmlspecialchars($tach->titre) ?> - <?php $tach->terminee ? 'Terminée' : 'À faire' ?>
    </li>
    <?php endforeach; ?>
</ul>
