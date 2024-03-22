<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>

<body>
    
    <?php include('Navbar.php') ?>


    <div class="container">

        <h2>Connectez-vous</h2>

        <form action="Hello.php" method="POST">

            <div class="field">
                <label for="mailid">Email :</label> <input type="email" id="mailid" name="mail" placeholder="Email@example.com" required>
            </div>
            <div class="field">
                <label for="prenomid">Prénom :</label> <input type="text" id="prenomid" name="prenom" placeholder="Prénom" required>
            </div>
            <div class="field">
                <label for="nomid">Nom :</label> <input type="text" id="nomid" name="nom" placeholder="Nom" required>
            </div>

            <button type="submit">Se Connecter</button>

        </form>

    </div>
</body>

<style>
    *::before,
    *::after,
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: sans-serif;
    }

    .container {
        padding: 30px;
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .container h2 {
        align-content: left;
        width: 20%;
    }

    form {
        width: 20%;

    }

    .field {
        display: flex;
        flex-direction: column;
    }

    input {
        border: 1px solid lightgrey;
        padding: 5px 10px;
        margin: 5px 0;
        border-radius: 3px;
    }

    button {
        color: white;
        background-color: #0D6DFD;
        border: none;
        border-radius: 5px;
        padding: 10px 50px;
        width: 100%;
        font-weight: bold;
    }
</style>

</html>