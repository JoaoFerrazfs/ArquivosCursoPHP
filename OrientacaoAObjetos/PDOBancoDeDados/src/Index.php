<?php

require 'Produto.php';


$produto = new Produto();

switch ($_GET['operacao']) {
    case 'list':
        echo '<h3>Produtos</h3>';
        foreach ($produto->list() as $value) {
            echo 'ID: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;

    case 'insert':

        $status = $produto->insert('Arroz');
        if (!$status) {
            echo 'Não foi possível inserir o produto.';
            return false;
        }
        echo "Registro inserido com sucesso!";



        break;

    case "update":

        $status = $produto->update('ovo',$_GET['id']);

        if (!$status) {
            echo 'Não foi possível executar operação!';            
            return false;
        }

        echo "Registro atualizado com sucesso!";
        break;

    case 'delete':
        $status = $produto->delete($_GET['id']);
        if (!$status) {
            echo 'Não foi possível executar operação!';            
            return false;
        }

        echo "Registro deletado com sucesso!";
        break;

          break;
}

?>
