<?php

// Nous vérifions que l'utilisateur soit bien connecté pour accéder à cette page.
// S'il ne l'est pas, nous le redirigeons vers la page login.php
if (!isset($_SESSION['conn']) || $_SESSION['conn'] !== true) {

    header('Location: login.php');
    exit();
}
?>