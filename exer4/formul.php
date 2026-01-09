<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #97547cff;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .radio, .checkbox {
            margin-top: 10px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 6px;
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<form action="traitement.php" method="post">
    <h2>Un petit formulaire, pour commencer !</h2>

    <h3>Merci de renseigner les informations suivantes:</h3>

    <label for="prenom">Votre nom :</label>
    <input type="text" name="nom" id="nom" required>

    <label for="age">Âge :</label>
    <input type="text" name="age" id="age" required>


    <label>Situation maritale :</label>
    <div class="radio">
        <input type="radio" name="marie" value="Marie" required> Marié(e)
        <input type="radio" name="veuf" value="veuf"> Veuf(e)
        <input type="radio" name="celibataire" value="celibateire"> Célibataire
    </div>

    <label> Centre d'Intérêts :</label>
    <div class="checkbox">
        <input type="checkbox" name="interets[]" value="Internet"> Internet
        <input type="checkbox" name="interets[]" value="Micro-inf"> Micro-Informatique
        <input type="checkbox" name="interets[]" value="jeux vidéo"> Jeux vidéo
    </div>
    <input type="submit" value="Envoyer">
    <input type="submit" value="Recommencer">
</form>

</body>
</html>

