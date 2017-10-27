<?php
  require_once('./createForm.php');
   $id = 1;
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
      echo createSelectradio("Quelle langue est parlée au Japon ?", "pour 1 point", "question_1", $id,
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
      ]);
      $id += 4;
      echo createSelectradio('En Japonais, le mot "Japon" se prononce :', "toujours pour 1 point", "question_2", $id,
      [
        [
          "value" => "1",
          "content" => "Nippon",
        ],
        [
          "value" => "0",
          "content" => "Japan",
        ],
        [
          "value" => "1",
          "content" => "Mitsubishi",
        ],
        [
          "value" => "0",
          "content" => "Zhongguo",
        ],
      ]);
      $id += 4;









      // echo createTitle("", "Quelle langue est parlée au Japon ?");
      // echo createInput("radio", "question_1", "", "Le Chinois");
      // echo createInput("radio", "question_1", "", "Le Sushi");
      // echo createInput("radio", "question_1", "", "Le Japonais");
      // echo createInput("radio", "question_1", "", "Zhongguo");





      //Fermeture du form
      echo createSubmit("Envoyer");
      echo closeTag("form");

    ?>
  </body>
</html>
