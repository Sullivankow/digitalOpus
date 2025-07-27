<?php
// Sécurité : vérifier que le formulaire a bien été soumis en POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération et sécurisation des champs
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validation
    $errors = [];
    if (empty($nom)) $errors[] = "Le nom est requis.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email invalide.";
    if (empty($message)) $errors[] = "Le message est requis.";

    if (empty($errors)) {
        // Préparation de l'email
        $to = 'sundly@live.fr'; // Remplacez par votre adresse
        $subject = "Nouveau message de contact SunDev Agency";
        $body = "Nom : $nom\nEmail : $email\n\nMessage :\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";

        // Envoi de l'email
        if (mail($to, $subject, $body, $headers)) {

            header('Location: http://localhost:3000/index.php?success=1#contact');
            exit;
        } else {
            $errors[] = "Erreur lors de l'envoi. Veuillez réessayer.";
        }
    }
} else {
    header('Location: http://localhost:3000/index.php?success=1#contact');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact - SunDev Agency</title>
    <meta http-equiv="refresh" content="4;url=index.php#contact">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="min-height:100vh;">
    <div class="container p-5 mt-5 bg-white rounded shadow text-center" style="max-width:500px;">
        <?php if (!empty($success)): ?>
            <h2 class="text-success mb-3"><i class="bi bi-check-circle me-2"></i>Message envoyé !</h2>
            <p>Merci pour votre message, nous vous répondrons rapidement.<br>Redirection en cours...</p>
        <?php else: ?>
            <h2 class="text-danger mb-3"><i class="bi bi-x-circle me-2"></i>Erreur</h2>
            <ul class="text-start">
                <?php foreach ($errors as $err): ?>
                    <li><?= $err ?></li>
                <?php endforeach; ?>
            </ul>
            <p>Vous allez être redirigé vers le formulaire...</p>
        <?php endif; ?>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</body>

</html>