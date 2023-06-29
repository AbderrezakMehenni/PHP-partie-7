<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Exercice 1 -->
    <!-- <form action="./user.php" method="get">
        <label for="prenom">Prénom: </label>
        <input type="text" name="prenom">

        <label for="nom">Nom: </label>
        <input type="text" name="nom">

        <button type="submit">Envoyer le formulaire</button>
    </form> -->

    <!-- Exercice 2 -->
    <!-- <form action="./user.php" method="post">
    <label for="prenom">Prénom: </label>
    <input type="text" name="prenom">

    <label for="nom">Nom: </label>
    <input type="text" name="nom">

    <button type="submit">Envoyer le formulaire</button> -->

    <!-- Exercice 3 -->
    <!-- <form action="./user.php" method="get">
        <label for="prenom">Prénom: </label>
        <input type="text" name="prenom">

        <label for="nom">Nom: </label>
        <input type="text" name="nom">

        <button type="submit">Envoyer le formulaire</button>
    </form> -->

    <!-- Exercice 4 -->
    <!-- <form action="./user.php" method="post">
    <label for="prenom">Prénom: </label>
    <input type="text" name="prenom">

    <label for="nom">Nom: </label>
    <input type="text" name="nom">

    <button type="submit">Envoyer le formulaire</button> -->

    <!-- Exercice 5 -->
    <!-- <form action="./user.php" method="post">
        <label for="civilite">Civilité: </label>
        <select name="civilite" id="oui">
            <option value="">Choisir sa civilité</option>
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
        </select>

        <label for="prenom">Prénom: </label>
        <input type="text" name="prenom">

        <label for="nom">Nom: </label>
        <input type="text" name="nom">

        <button type="submit">Envoyer le formulaire</button>
    </form> -->

    <!-- Exercice 6 -->
    <?php
        // if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['civilite'])) {
        //     echo "Salut " . $_POST['nom'] . " " . $_POST['prenom'] . ", ça dit quoi ?";
        // } else {
            ?>
            <!-- <form method='post'>
                <label for='civilite'>Civilité: </label>
                <select name='civilite' id='oui'>
                    <option value=''>Choisir sa civilité</option>
                    <option value='homme'>Homme</option>
                    <option value='femme'>Femme</option>
                </select>
        
                <label for='prenom'>Prénom: </label>
                <input type='text' name='prenom'>
        
                <label for='nom'>Nom: </label>
                <input type='text' name='nom'>
        
                <button type='submit'>Envoyer le formulaire</button>
            </form> -->
            <?php
        // }
    ?>
    <!-- Exercice 7 -->
    <?php
        // if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['civilite']) && !empty($_POST['fichier'])) {
        //     echo "Salut " . $_POST['nom'] . " " . $_POST['prenom'] . ", ça dit quoi ?";
        // } else {
            ?>
            <!-- <form method='post'>
                <label for='civilite'>Civilité: </label>
                <select name='civilite' id='oui'>
                    <option value=''>Choisir sa civilité</option>
                    <option value='homme'>Homme</option>
                    <option value='femme'>Femme</option>
                </select>
        
                <label for='prenom'>Prénom: </label>
                <input type='text' name='prenom'>
        
                <label for='nom'>Nom: </label>
                <input type='text' name='nom'>

                <label for="fichier">Fichier: </label>
                <input type="file" name="fichier">
        
                <button type='submit'>Envoyer le formulaire</button>
            </form> -->
            <?php
        // }
    ?>

    <!-- Exercice 8 -->
    <?php
        if (!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['civilite']) && !empty($_POST['fichier'])) { 
            if(!empty($_FILES['fichier']['name']) && $_FILES['fichier']['type'] == 'application/pdf') {
                echo "Salut " . $_POST['nom'] . " " . $_POST['prenom'] . ", ça dit quoi ?";
            } else {
                echo "Bah non pelo j'veux un PDF";
            }
        } else {
            ?>
            <form method='post' enctype="multipart/form-data">
                <label for='civilite'>Civilité: </label>
                <select name='civilite' id='oui'>
                    <option value=''>Choisir sa civilité</option>
                    <option value='homme'>Homme</option>
                    <option value='femme'>Femme</option>
                </select>
        
                <label for='prenom'>Prénom: </label>
                <input type='text' name='prenom'>
        
                <label for='nom'>Nom: </label>
                <input type='text' name='nom'>

                <label for="fichier">Fichier: </label>
                <input type="file" name="fichier">
        
                <button type='submit'>Envoyer le formulaire</button>
            </form>
            <?php
        }
    // ?>
</body>

</html>