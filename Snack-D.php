<!-- 
Snack D
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$paragraphs = explode('.', $text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    for($i=0; $i < count($paragraphs); $i++){
        echo "<p>$paragraphs[$i]</p>";
    }
    ?>

</body>
</html>