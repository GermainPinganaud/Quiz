<?php
  require_once('./createForm.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo openForm("./monScript.php");
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
      echo createInput("text", "myText", "", "Mon premier input");
      echo createInput("number", "myNumber", "", "Mon second input");
      echo createInput("radio", "myRadio", "", "Ma radio (du zizi)");
      echo createInput("checkbox", "myCheckbox", "", "Ma checkbox");
      echo closeTag("form");
      echo createSubmit("Envoyer");
    ?>
  </body>
</html>
