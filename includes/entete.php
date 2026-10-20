<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title><?= echapper($titrePage) ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="theme-<?= $theme ?>">
<main class="conteneur">
    <header>
        <div class="modeAffichage">
            <form action="theme.php" method="post">
                <label for="theme">Choisir un thème :</label>
                <select name="theme" id="theme">
                    <option value="clair">Claire</option>
                    <option value="sombre">Sombre</option>
                </select>
                <button type="submit">oui</button>
            </form>
        </div>
        
        <p class="sur-titre">MON PREMIER PROJET PHP</p>
        <h1><?= echapper($titrePage) ?></h1>
        <p>Une liste construite sur le serveur, à partir d'un tableau PHP.</p>
    </header>
