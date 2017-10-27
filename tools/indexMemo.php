<?php
  require_once('./createForm.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Quizz</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Sigmar+One" rel="stylesheet">
  </head>
  <body>
    <h1>Quiz Jap<span class="red_o">o</span>n</h1>
    <!-- FIN DU HEAD -->
    <?php
      echo openForm("./script.php");
      echo createSelect("country", "Choisissez un pays", [
        [
          "value" => "es",
          "content" => "Espagne",
        ],
        [
          "value" => "jp",
          "content" => "Japon",
        ],
      ]);
    //echo createInput("$type", "name", "value", "label");
      echo createInput("text", "myText", "", "Mon premier input");
      echo createInput("number", "myNumber", "", "Mon second input");
      echo createInput("radio", "myRadio", "", "Ma radio (du zizi)");
      echo createInput("checkbox", "myCheckbox", "", "Ma checkbox");
      echo closeTag("form");
      echo createSubmit("Envoyer");
    ?>
  </body>
</html>
