<?php
$points = 0;

// if (!isset($_GET["question_1"])) {$points += 0;}
// if (!isset($_GET["question_2"])) {$points += 0;}
// if (!isset($_GET["question_3"])) {$points += 0;}
// if (!isset($_GET["question_4"])) {$points += 0;}
// if (!isset($_GET["question_5"])) {$points += 0;}
// if (!isset($_GET["question_6"])) {$points += 0;}

!isset($_GET["question_1"]) ? $points += 0 : $points += 0 ;
!isset($_GET["question_2"]) ? $points += 0 : $points += 0 ;
!isset($_GET["question_3"]) ? $points += 0 : $points += 0 ;
!isset($_GET["question_4"]) ? $points += 0 : $points += 0 ;
!isset($_GET["question_5"]) ? $points += 0 : $points += 0 ;
!isset($_GET["question_6"]) ? $points += 0 : $points += 0 ;

$points += $_GET["question_1"];
$points += $_GET["question_2"];
$points += $_GET["question_3"];
$points += $_GET["question_4"];
if ($_GET["question_5"] == "18") {
  $points += 3;
}
$points += $_GET["question_6"];

require_once("./head.html");
echo "Tu as $points points";
require_once("./foot.html");
