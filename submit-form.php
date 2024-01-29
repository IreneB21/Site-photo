<?php
$postData = $_POST;

if (
    !isset($postData['email'])
    || empty($postData['message'])
    || trim($postData['message']) === ''
) {
    echo ('Please enter a valid email and message.');
    return;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>About - Claire Parisienne - Photographer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/about.css">
    <link rel="preload" href="images" as="pictures">
    <script src="script.js"> </script>

    <script src="https://kit.fontawesome.com/f61418b52c.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Quicksand:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&family=Montserrat:wght@200&family=Quicksand:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>

<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <div class="container">
        <h1 class="ty-message">Thank you for your message,<br> I will respond soon!</h1>
        <div class="card">
            <div class="card-body">
                <p class="card-title">Summary of your informations</p>
                <p class="card-text"><b>Email</b>: <?php echo($postData['email']); ?></p>
                <p class="card-text"><b>Message</b>: <?php echo(strip_tags($postData['message'])); ?></p>
            </div>
        </div>
    </div>