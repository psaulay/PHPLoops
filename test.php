<?php

include('data.php');
$items=$datas[students][1];

foreach ($items as $item => $value) {
  echo $item.'<br>';
  echo $value.'<br>';


$items2=$datas[students][1][2];

foreach ($items2 as $item2 => $value2) {
  echo $item2.'<br>';
  echo $value2.'<br>';

}}



?>
