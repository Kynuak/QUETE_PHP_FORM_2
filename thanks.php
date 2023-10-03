<?php

$data = array_map('trim', $_POST);
$errors = [];

if(empty($data['user_lastname'])){
    $errors[] = "Le nom est vide <br>";
}

if(empty($data['user_firstname'])){
    $errors[] = "Le prénom est vide <br>";
}

if(empty($data['user_email'])){
    $errors[] = "L'email est vide <br>";
}

if(!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = "L'email est pas au bon format <br>";
}

if(empty($data['user_telephone'])){
    $errors[] = "Le téléphone est vide <br>";
}

if(empty($data['user_sujet'])){
    $errors[] = "Le sujet est vide <br>";
}

if(empty($data['user_message'])){
    $errors[] = "Le message est vide <br>";
}



if (empty($errors)){
echo "Merci " . $_POST['user_firstname'] . " " . $_POST['user_lastname'] . " de nous avoir contacté à propos de '" . $_POST['user_sujet'] . "'.";
echo "<br>";
echo "<br>";

echo "Un de nos conseillers vous contactera soit à l'adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_telephone'] . " dans les plus brefs détais
pour traiter votre demande :";
echo "<br>";
echo $_POST['user_message'];
} else {
    echo "Les erreurs sont : <br>";
    foreach($errors as $error){
        echo $error;
    }
}