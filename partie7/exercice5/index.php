<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 5 Partie 7</title>
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
        <h1>Exercice 5 Partie 7</h1>
        <h2> Créer un formulaire sur la page index.php avec :<br>

            - Une liste déroulante pour la civilité (Mr ou Mme)<br>
            - Un champ texte pour le nom<br>
            - Un champ texte pour le prénom<br>

            Ce formulaire doit rediriger vers la page index.php.<br>
            Vous avez le choix de la méthode.
        </h2>
        <p>
        <form name="inscription" method="get" action="index.php">
            Entrez votre nom : <input type="text" name="nom"/> <br/>
            Entrez votre prénom : <input type="text" name="prenom"/><br/>
            <select name="civilite">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <input type="submit" name="valider" value="OK"/>
        </form>

    </p>
</body>
</html>
