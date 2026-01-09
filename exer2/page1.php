<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 1 - Formulaire</title>
    <style>
        * {
            box-sizing: border-box; /* Essentiel pour aligner les tailles */
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #e0e0e0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #d0d0d0;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Bienvenue</h2>
    <form action="page2.php" method="get">
        <label for="prenom">Votre prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <input type="submit" value="Valider">
    </form>
</div>

</body>
</html>
