<?php
if (!isset($_SESSION)) {
    header('Location: index.php');
} else {
    session_start();
} ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('navbar.php') ?>

    <?php if (isset($_SESSION)) : ?>
        <p><b>Vos informations</b></p>
        <p><b>NOM :</b> <?php echo $nom; ?></p>
        <p><b>PRENOM :</b> <?php echo $prenom; ?></p>
        <p><b>EMAIL :</b> <?php echo $email; ?></p>
    <?php endif; ?>

</body>

</html>