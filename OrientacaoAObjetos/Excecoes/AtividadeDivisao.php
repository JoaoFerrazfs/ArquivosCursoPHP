<?php
function divisao(array $numeros)
{
    if ($numeros['primero']==0 || $numeros['segundo']==0)
    {
            throw new Exception("Favor passar um númer diferente de 0!");
    }
    return true;

}


$numeros=[
    'primero' =>5,
    'segundo' =>0
];

$status = false;

try {
    $status= divisao($numeros);
} catch(Exception $e){
    echo $e->getMessage();
    die();

} finally{
    echo "Deu certo";
    die();
}