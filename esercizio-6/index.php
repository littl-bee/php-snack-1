<!-- 

Uso di PHP dentro HTML
- Crea una pagina HTML con un titolo `<h1>` che contiene un messaggio generato da PHP.  

-->

<?php

$titolo = "Ciao, sono un titolo";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>

<h1><?php echo $titolo ?></h1>

</body>
</html>