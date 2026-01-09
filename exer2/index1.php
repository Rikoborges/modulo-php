<!DOCTYPE html>
<html lang = "fr">
<head>
 <meta charset = "utf-8">
 <title>Une boucle pour dire bonjour au monde !</title>
</head>
<body>
 <span style = "font-size : 1em;">Bonjour le monde !</span><br>
 <span style = "font-size : 1.5em;">Bonjour le monde !</span><br>
 <span style = "font-size : 2em;">Bonjour le monde !</span><br>
 <span style = "font-size : 2.5em;">Bonjour le monde !</span><br>
 <span style = "font-size : 3em;">Bonjour le monde !</span><br>
 <hr style = "border:1px solid #ccc"/>
 <span style = "font-size : 1em;">Bonjour le monde !</span><br>
 <span style = "font-size : 1.5em;">Bonjour le monde !</span><br>
 <span style = "font-size : 2em;">Bonjour le monde !</span><br>
 <span style = "font-size : 2.5em;">Bonjour le monde !</span><br>
 <span style = "font-size : 3em;">Bonjour le monde !</span><br>
 <span>... et la suite de la page web ...</span>
</body>
</html>




<?php
// Titre simple en paragraphe
echo "<p>Bonjour le monde !</p>";

// Boucle de h6 (petit) vers h1 (grand)
for ($i = 6; $i >= 1; $i--) {
    echo "<h$i>Bonjour le monde !</h$i>";
}
?>

<!DOCTYPE html>
<!-- Code html constant -->
<html lang = "fr">
<head>
 <meta charset = "utf-8">
 <title>Bonjour le monde !</title>
</head>
<body>
<?php
// Boucle for
for ($cpt = 5; $cpt > 0; $cpt--) {
 echo '<H' . $cpt . ' style="background-color:#9900CC; color:#fff">
 Bonjour le monde !';
}
?>
</body>
</html>