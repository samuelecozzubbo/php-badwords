<?php

$message = $_POST['text'];
$message_lenght = strlen($message);
$bad_word= $_POST['bad-word'];
$censored_message = str_replace($bad_word, '***', $message);
$censored_message_lenght = strlen($censored_message);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form-landing</title>
</head>
<body>
    <h1>Form Post</h1>
    <p> <?php echo $message ?> </p>
    <div> Il messaggio è lungo <?php echo $message_lenght  ?> caratteri </div>
    <p> <?php echo $censored_message ?> </p>
    <div> Il messaggio censurato è lungo <?php echo $censored_message_lenght  ?> caratteri </div>
</body>
</html>