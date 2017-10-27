<?php
//Une ouverture de balise form
  //Definir une action
function openForm($action = "#")
{
  return "<form action='" . $action . "'>";
}

//Une fermeture de balise form
function closeTag($tag)
{
  return "</" . $tag . ">";
}
//Mise en place d'un input
  //Type = string
  //Name = string
  //Value = string
  //Label = string              functionName($label = $name) {} ?
function createTitle($class = "#", $label)
{
  return "<h3 class='" . $class . "'>" . $label . "</h3>";
}
function createInput($type, $name, $value = "no value", $label = "no label")
{
  return "<input type='" . $type . "' name='" . $name . "' value='" . $value . "'><label>" . $label . "</label><br>";
}
//Mise en place d'un select
function createSelect($name, $label, $options)
{
  // $options = [
  //   [
  //     "value" => "fr",
  //     "content" => "Français",
  //   ],
  //   [
  //     "value" => "en",
  //     "content" => "English",
  //   ],
  //   [
  //     "value" => "de",
  //     "content" => "Deutsch",
  //   ],
  // ];
  $html = "<label>" . $label . "</label>"; //Creer une variable string permet la concatenation sur plusieurs lignes
  $html .= "<select name='" . $name . "'>";
  foreach ($options as $key => $value)
  {
    $html .= "<option value'" . $value["value"] . "'>" . $value['content'] . "</option>";
  }
  $html .= "</select>";
  return $html;
}
//Generer un bouton submit
function createSubmit($value)
{
  return "<input type='submit' value='" . $value . "'>";
}
