<?php
$points = 0;
if (isset($_GET) == false) {
  $points += 0;
}
$points += $_GET["question_1"];
$points += $_GET["question_2"];
$points += $_GET["question_3"];
$points += $_GET["question_4"];
if ($_GET["question_5"] == "18") {
  $points += 3;
}
echo "Tu as $points points";
