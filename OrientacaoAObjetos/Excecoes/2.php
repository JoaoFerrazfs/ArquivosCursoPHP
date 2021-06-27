<?php

function validarUsuario( array $usuario)
{
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    
    {
        return false;
    }
}

$usuario =[
    'codigo' =>1,
    'nome' =>'',
    'idade'=>57

];

$usuarioValido = validarUsuario($usuario);

if(!$usuarioValido){
    echo "Usuario Inválido";
    return false;
}

echo "\n ... execuntado ...\n";