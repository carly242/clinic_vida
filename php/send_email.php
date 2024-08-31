<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs du formulaire
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $status = htmlspecialchars($_POST['status']);
    $address = htmlspecialchars($_POST['address']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse e-mail de destination
    $to = "carlybivihou8@gmail.com"; // Remplace par ton adresse e-mail

    // Sujet de l'e-mail
    $subject = "Nouveau message depuis le formulaire de contact du site";

    // Corps de l'e-mail
    $body = "Nom: $name\n";
    $body .= "Téléphone: $phone\n";
    $body .= "Date et lieu de naissance: $dob\n";
    $body .= "Statut social: $status\n";
    $body .= "Adresse: $address\n";
    $body .= "Message: $message\n";

    // En-têtes de l'e-mail
    $headers = "From: $name <$to>\r\n";
    $headers .= "Reply-To: $to\r\n";

    // Envoie l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Échec de l'envoi du message.";
    }
} else {
    echo "Une erreur est survenue.";
}
?>
