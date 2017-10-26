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
      echo openForm("./submit.php");
      // echo createInput("$type", "name", "value", "label");

      //Question 1
      // function createSelect($name, $label, $options)
      createSelectradio("Quelle langue est parlée au Japon ?",
      [
        [
          "value" => "0",
          "content" => "Le Chinois",
        ],
        [
          "value" => "0",
          "content" => "Le Sushi",
        ],
        [
          "value" => "1",
          "content" => "Le Japonais",
        ],
        [
          "value" => "0",
          "content" => "La réponse D",
        ],
      ],);













      //Fermeture du form
      echo closeTag("form");
      echo createSubmit("Envoyer");
    ?>
  </body>
</html>









// echo createTitle("", "Quelle langue est parlée au Japon ?");
// echo createInput("radio", "question_1", "", "Le Chinois");
// echo createInput("radio", "question_1", "", "Le Sushi");
// echo createInput("radio", "question_1", "", "Le Japonais");
// echo createInput("radio", "question_1", "", "Zhongguo");
