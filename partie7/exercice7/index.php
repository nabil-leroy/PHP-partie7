<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 7 Partie 7</title>
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
        <h1>Exercice 7  Partie 7</h1>
        <h2> Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.
        </h2>
        <p>
        <form name="inscription" method="get" action="index.php">
            Entrez votre nom : <input type="text" name="nom"/> <br/>
            Entrez votre prénom : <input type="text" name="prenom"/><br/>
            <select name="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
                <p>
                    Formulaire d'envoi de fichier :<br />
                    <input type="file" name="monfichier" /><br />
                    <input type="submit" value="Envoyer le fichier" />
                </p>
            </form>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <br>
        <?php
        echo $_GET['monfichier'];
        ?>

</body>
</html>
