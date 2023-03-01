<html>
<body>
<h1>Liste des films</h1>


<?php

//2° - Préparation de requette et execution
$retour = $base->query('SELECT * FROM movies WHERE annee='.$ANNEE.';');

?>

</body>
</html>




