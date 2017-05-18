<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 6 Partie 7</title>
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
        <h1>Exercice 6  Partie 7</h1>
        <h2> Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
            Utiliser qu'une seule page.
        </h2>
        <?php
        $genderList = array('Monsieur', 'Madame');
// déclaration de variables par défaut
        $name = '';
        $firstName = '';
        $genderUser = 0;
// recupération des données en $_GET ou $_POST
        if (isset($_POST['nom'])) {
            $name = $_POST['nom'];
        } elseif (isset($_GET['nom'])) {
            $name = $_GET['nom'];
        }
        if (isset($_POST['prenom'])) {
            $firstName = $_POST['prenom'];
        } elseif (isset($_GET['prenom'])) {
            $firstName = $_GET['prenom'];
        }
        if (isset($_POST['sexe'])) {
            $genderUser = $_POST['sexe'];
        } elseif (isset($_GET['sexe'])) {
            $genderUser = $_GET['sexe'];
        }
        ?>
        <?php
        if ($name != '' || $firstName != '') {
            ?>
            <p> Bonjour <?= $genderList[$genderUser] ?> <?= $name ?> <?= $firstName ?></p>
            <?php
        } else {
            ?>
            <form name="index" action="index.php" method="POST">
                <div id="formulaire">
                    <select name="sexe">
                        <?php
                        // On genere les options en allant chercher les données dans le tableau $genderList
                        foreach ($genderList as $key => $gender) {
                            ?>
                            <option value="<?= $key ?>"><?= $gender ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <label for="nom">Nom : </label><input type="text" name="nom" placeholder="Nom" required>
                    <label for="prenom">Prénom : </label><input type="text" name="prenom" placeholder="Prénom" required>
                    <input type="submit" value="Valider" />
                </div>
            </form>
            <?php
        }
        ?>
    </body>
</html>
</body>
</html>
