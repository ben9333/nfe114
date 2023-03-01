<html>
<body>
<h1>Formulaire de recherche</h1>

<p>ANNEE ? <SELECT name="annee">

<?php

//1° - Connexion à la BDD
$base = new PDO('mysql:host=localhost; dbname=id20205300_movies', 'id20205300_beno', '+!v[QdLa4er?T1)I');
$base->exec("SET CHARACTER SET utf8");

//2° - Préparation de requette et execution
$retour = $base->query('SELECT DISTINCT annee FROM movies;');

//3° - Lecture du resultat de la requette
while ($data = $retour->fetch()){
echo "<option>".$data['annee']."</option>";
}

?>
</SELECT>
</p>

<p><input type="submit"/></p>
</form>

</body>
</html>




