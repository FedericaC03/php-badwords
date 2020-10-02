
<!-- Creare una variabile con un paragrafo di testo.
     Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
$paragraph = 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$badwords = $_GET['lorem'];
$newParagraph = str_replace('lorem', "***", $paragraph);
// $newParagraph = str_replace($badwords, "***", $paragraph);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bad words</title>
  </head>
  <body>

    <p> <?php echo $newParagraph; ?> </p>
    <p>la lunghezza del paragrafo è: <?php echo strlen($newParagraph); ?></p>
  </body>
</html>
