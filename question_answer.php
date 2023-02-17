<!-- 

Найдите язык, указанный в переменной с помощью оператора switch;

 -->




 <?php


$language = 'c#';
switch ($language) {
  case 'php':
?>
    <h1>Язык PHP</h1>
  <?php break;
  case 'js':
  ?>
    <h1>Язык JavaScript</h1>
  <?php
    break;
  case 'c#':
  ?>
    <h1>Язык C#</h1>
  <?php
    break;
  default:
  ?>
    <h1>It's not a known language</h1>
<?php
}
?>

















































<!-- 
<?php

$language = 'c#';
switch ($language) {
  case 'php':
?>
    <h1>Язык PHP</h1>
  <?php break;
  case 'js':
  ?>
    <h1>Язык JavaScript</h1>
  <?php
    break;
  case 'c#':
  ?>
    <h1>Язык C#</h1>
  <?php
    break;
  default:
  ?>
    <h1>It's not a known language</h1>
<?php
}

?> -->