Ó<?php


$pd=new PDO("mysql:host=localhost","root","");
$q="create database if not exists train;";
$pd->exec($q);
   
?>
