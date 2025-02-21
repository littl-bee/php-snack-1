<!-- 

Array associativo
- Crea un array associativo con le informazioni di una persona (`nome`, `età`, `città`).  
- Stampa queste informazioni in una frase.  

-->

<?php

$persona = [
    "Nome" => "Mario",
    "Età" => 42,
    "Città" => "Mushroom Kingdom",
];

echo "Ciao, sono {$persona["Nome"]}, ho {$persona["Età"]} anni e abito a {$persona["Città"]}. Wahoo!";

?>