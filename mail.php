<?php

$recepient = "youmail@ya.ru";
$sitename = "name";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);

$pagetitle = "New reqest from site \"$sitename\"";
$message = "Name: $name \nPhone number: $phone \n;
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");