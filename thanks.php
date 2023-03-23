<?php
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire
    if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if(!isset($_POST['name']) || trim($_POST['name']) === '')
        $errors[] = "Le nom est obligatoire";
    if(!isset($_POST['telephone']) || trim($_POST['telephone']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if(!isset($_POST['subject']) || trim($_POST['subject']) === '')
        $errors[] = "Le choix d'un sujet est obligatoire";
    if(!isset($_POST['message']) || trim($_POST['message']) === '')
        $errors[] = "Le message est obligatoire";
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] =  "Email pas valide";
    }

    $answer = 'Merci ' . $_POST['firstname'] . ' ' . $_POST['name'] . ' de nous avoir contacté à propos de ' . $_POST['subject'] . '.

Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['email'] . ' ou par téléphone au ' . $_POST['telephone'] . ' dans les plus brefs délais pour traiter votre demande : ' .

        $_POST['message'];

    if(empty($errors)) {
        // traitement du formulaire
        // puis redirection

      header('Location: thanks.php');
      echo $answer;

    }
}

// Affichage des éventuelles erreurs
if (count($errors) > 0) : ?>
    <div class="errors">
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif;




