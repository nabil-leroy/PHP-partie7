<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 8 Partie 7</title>
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
        <h1>Exercice 8  Partie 7</h1>
        <h2> Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.
        </h2>
        <p>
        <p>
<p> enoncé: Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent,
    vérifier que le fichier transmis est bien un fichier pdf..</p>
<div>
<?php
// verifie que les champs sont valides et non vide. 
if (empty($_POST['nom']) || empty($_POST['prenom'])) {
    ?>
    <form action="ex8.php" method="POST" enctype="multipart/form-data">
        <select name="choix">
            <option value="M">M</option>
            <option value="Mme">Mme</option>
        </select>
        <label for="nom">Votre nom </label>
        <input type="text" name="nom">
        <label>Votre prénom <input type="text" name="prenom" ></label>
        <label>Envoi de fichier<input type="file" name="fichier"></label>
        <input type="submit" value="Valider"/>
    </form>
<?php } else {
    ?>  
    <p>Bonjour <?php echo $_POST['choix']; ?></p>
    <p> Ton nom est  <?php echo $_POST['nom']; ?> !</p>
    <p> Ton prénom est  <?php echo $_POST['prenom']; ?> !</p>
<?php
}
// isset sert a vérifier si les champs existent. 
if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
    // on récup les données du fichier
    $fileInfo = pathinfo($_FILES['fichier']['name']);
    // on récup le nom 
    $fileName = $fileInfo['filename'];
    // on récup l'extension 
    $fileExtension = $fileInfo['extension'];
    ?>
    <p> Votre fichier est <?php echo $fileName;?> </p>
    <p> L'extension de votre fichier est <?php echo $fileExtension;?> </p>
    <?php
    // si l'extension est un pdf
    if($fileExtension == 'pdf'){
        ?>
       <p>Votre fichier est au format pdf</p><?php
    }else{
        ?>
    <p>Votre fichier n'est pas au format pdf</p><?php 
    }
}
?>
    </p>
</body>
</html>
