<?php

include_once "config.php";
include_once "entidades/usuario.php";

$usuario = new Usuario();
$usuario->usuario = "tsabba";
$usuario->clave = $usuario->encriptarClave("admin123");
$usuario->nombre = "Tomas";
$usuario->apellido = "Sabbavini";
$usuario->correo = "tomassabbavini@hotmail.com";
$usuario->insertar();
echo "Usuario insertado.";
?>