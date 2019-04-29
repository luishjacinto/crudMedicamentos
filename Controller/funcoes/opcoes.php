<?php
function opcoes($option){
    switch($option){
        case 'inserir':
            header("Location: /inserir");
        break;
        case 'deletar':
            header("Location: /deletar");
        break;
        case 'buscar':
            header("Location: /buscar");
        break;
        case 'editar':
            header("Location: /editar");
        break;
    }
}
?>