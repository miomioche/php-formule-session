<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Inscription</h1>
        <form action="account.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="register-lastname">Nom</label>
                <input type="text" id="register-lastname" name="lastname">
            </div>
            <div>
                <label for="register-firstname">Prénom</label>
                <input type="text" id="register-firstname" name="firstname">
            </div>
            <div>
                <label for="register-email">Email</label>
                <input type="mail" id="register-email" name="email">
            </div>
            <div>
                <label for="register-phone">Numéro de téléphone</label>
                <input type="tel" id="register-phone" name="phone">
            </div>
            <div>
                <label for="register-address">Adresse</label>
                <input type="text" id="register-address" name="address">
            </div>
            <div>
                <label for="register-city">Ville</label>
                <input type="text" id="register-city" name="city">
            </div>
            <div>
                <label for="register-postal-code">Code postal</label>
                <input type="number" id="register-postal-code" name="postal-code">
            </div>
            <div>
                <label for="register-password">Mot de passe</label>
                <input type="password" id="register-password" name="password">
            </div>
            <div>
                <label for="register-password-check">Confirmation de mot de passe</label>
                <input type="password" id="register-password-check" name="password-check">
            </div>
            <div>
                <label for="register-quote">Votre citation</label>
                <input type="text" id="register-quote" name="quote">
            </div>
            <div>
                <label for="register-avatar">Votre avatar</label>
                <input type="file" id="register-avatar" name="avatar">
            </div>
            <div>
                <label for="register-description">Votre description</label>
                <textarea id="register-description" name="description" cols="30" rows="5"></textarea>
            </div>
            <div>
                <input type="checkbox" id="register-consent" name="consent">
                <label for="register-consent">J'accepte de partager mes données pour mon inscription</label>
            </div>
            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>