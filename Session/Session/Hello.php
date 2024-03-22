<?php 

if (!isset($_SESSION)){
    header('Location: index.php');
}
else{
    session_start();

} ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>
    <?php include('navbar.php') ?>

    <?php if (isset($_SESSION)) : ?>
        <p>Hi <?php echo $prenom . $nom; ?></p>
        <p>Email : <?php echo $mail; ?></p>
    <?php endif; ?>
</body>

</html>