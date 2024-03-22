<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <style>
        *::before,
        *::after,
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #F7F9FB;
            font-family: sans-serif;
            overflow: hidden;
            height: 40px;
            display: flex;
            align-items: center;
            gap: 50%;
            padding: 50px 50px;
            background-color: grey;

        }

        h1 {
            font-weight: lighter;
        }

        .navbar a {

            padding: 14px 50px;
            text-decoration: none;
            display: flex;
            text-align: center;
            justify-content: center;
            color: black;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navContainer {
            display: flex;
        }

        .logout {
            align-items: flex-end;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="navContainer">

            <h1>Mon Super Site</h1>
            <a href="index.php">Accueil</a>
            <a href="Hello.php">Bonjour</a>
            <a href="Info.php">Infos</a>

        </div>

        <?php if (!isset($_SESSION)) : ?>
        <?php else : ?>
            <a href="Disconnect.php" class="logout">Se déconnecter</a>
        <?php endif; ?>

    </div>