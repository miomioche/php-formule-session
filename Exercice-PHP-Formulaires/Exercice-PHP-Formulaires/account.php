<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte - Récap</title>
    <link rel="stylesheet" href="style.css">

    <?php
        $checkExists = 
            isset($_POST['lastname']) && 
            isset($_POST['firstname']) && 
            isset($_POST['email']) && 
            isset($_POST['phone']) && 
            isset($_POST['address']) && 
            isset($_POST['city']) && 
            isset($_POST['postal-code']) && 
            isset($_POST['password']) && 
            isset($_POST['password-check']) && 
            isset($_POST['quote']) && 
            isset($_POST['description']) && 
            isset($_POST['consent']);

        $checkNotEmpty = 
            !empty($_POST['lastname']) && 
            !empty($_POST['firstname']) && 
            !empty($_POST['email']) && 
            !empty($_POST['phone']) && 
            !empty($_POST['address']) && 
            !empty($_POST['city']) && 
            !empty($_POST['postal-code']) && 
            !empty($_POST['password']) && 
            !empty($_POST['password-check']) && 
            !empty($_POST['quote']) && 
            !empty($_POST['description']) && 
            !empty($_POST['consent']);

        $checkFormat = 
            filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && 
            preg_match('/^[0-9]{10}+$/', $_POST['phone']) && 
            preg_match('/^[0-9]{5}+$/', $_POST['postal-code']);

        $checkPasswordMatch = ($_POST['password'] == $_POST['password-check']);

        if ($checkExists) {
            if ($checkNotEmpty) {
                if ($checkFormat) {
                    if ($checkPasswordMatch) {
                        $lastname = htmlspecialchars($_POST['lastname']);
                        $firstname = htmlspecialchars($_POST['firstname']);
                        $mail = $_POST['email'];
                        $phone = $_POST['phone'];
                        $address = htmlspecialchars($_POST['address']);
                        $city = htmlspecialchars($_POST['city']);
                        $postcode = $_POST['postal-code'];
                        $quote = strip_tags($_POST['quote']);
                        $description = strip_tags($_POST['description']);
                    }
                }
            };
        };

        if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
            if ($_FILES['avatar']['size'] <= 1000000) {
                $fileInfo = pathinfo($_FILES['avatar']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions)) {
                    $fileLocation = 'img/' . basename($_FILES['avatar']['name']);
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $fileLocation);
                }
            }
        };

    ?>

</head>
<body>
    <main>
        <h1>Mon compte</h1>
        <section>
            <h2>Rappel de vos informations</h2>
            <div>
                <figure>
                    <img src="<?php echo $fileLocation ?>" alt="Avatar" >
                </figure>
                <div>
                    <p><strong>Nom</strong> : <?php echo $lastname ?></p>
                    <p><strong>Prénom</strong> : <?php echo $firstname ?></p>
                    <p><strong>Citation</strong> : <?php echo $quote ?></p>
                    <p><strong>Email</strong> : <?php echo $mail ?></p>
                    <p><strong>Numéro de téléphone</strong> : <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
                    <p><strong>Adresse</strong> : <?php echo $address ?></p>
                    <p><strong>Description</strong> : <?php echo $description ?></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>