<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 3 Partie 7</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <input type="button" value="Exercice 1" onClick="javascript:document.location.href = 'http://partie7/exercice1/'" />
            <input type="button" value="Exercice 2" onClick="javascript:document.location.href = 'http://partie7/exercice2/'" />
            <input type="button" value="Exercice 3" onClick="javascript:document.location.href = 'http://partie7/exercice3/'" />
            <input type="button" value="Exercice 4" onClick="javascript:document.location.href = 'http://partie7/exercice4/'" />
            <input type="button" value="Exercice 5" onClick="javascript:document.location.href = 'http://partie7/exercice5/'" />
            <input type="button" value="Exercice 6" onClick="javascript:document.location.href = 'http://partie7/exercice6/'" />
            <input type="button" value="Exercice 7" onClick="javascript:document.location.href = 'http://partie7/exercice7/'" />
            <input type="button" value="Exercice 8" onClick="javascript:document.location.href = 'http://partie7/exercice8/'" />

        </header>
        <h1>Exercice 3  Partie 7</h1>
        <h2> Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
        </h2>
        <p>
        <p>Bonjour !</p>

        <?php
        echo $_GET['nom'];
        ?>
        </br>
        <?php
        echo $_GET['prenom'];
        ?>

        <p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page index.php.</p>

    </p>
</body>
</html>
