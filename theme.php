<?php
$theme = $_POST['theme'] ?? '';

if ($theme === 'clair' || $theme === 'sombre') {
    setcookie('theme', $theme, time() + 7 * 24 * 60 * 60, '/');
}

header('Location: index.php');
exit;