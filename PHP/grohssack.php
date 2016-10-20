<?php
$file = 'boring.txt';
// Öffnet die Datei, um den vorhandenen Inhalt zu laden
fopen($file, 'rw');
$current = file_get_contents($file);
// Fügt eine neue Person zur Datei hinzu
$current .= '\''.$_GET['area'].'\';\''.$_GET['height'].'\';\''.$_GET['floors'].'\';\''.$_GET['age']."'\n";
// Schreibt den Inhalt in die Datei zurück
file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
?>