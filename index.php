<?php
require "falabella.php";

$falabella = new falabella();

foreach ($falabella->render() as $item) {
    echo $item.'<br>';
}