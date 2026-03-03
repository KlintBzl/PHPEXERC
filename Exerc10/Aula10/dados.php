<?php

$nome = "Klint";
$curso = "desenvolvimento web";
$ano = date("Y");

function saudar($nome, $curso){
    return "Olá, " . $nome . "! Seja bem-vindo ao curso de " . $curso;
}