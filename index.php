
<?php

 
    $badword = $_GET['badword'];

   
    $uncensored = 'Non rompere il razzo';

    
    $cleanText = str_replace($badword, '***', $uncensored);

    
    $textLenght = strlen($uncensored);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    
    <p>
        <?php echo $cleanText; ?>
    </p>

    
    <div>La lunghezza del testo è : <strong><?php echo $textLenght; ?></strong> lettere</div>
</body>
</html>