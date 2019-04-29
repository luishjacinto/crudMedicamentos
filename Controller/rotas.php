<?php
include("Model/medicamentoClass.php");
include("Model/medicamentoDao.php");
include("Model/database.php");
include("Controller/funcoes.php");
function getPagina()
{
	$path = $_SERVER['REQUEST_URI'];
	$url = strtolower(explode("?",$path)[0]);
    switch($url){
        case '/':
            include("View/main.php");
        break;
        case '/opcoes':
            opcoes($_POST["select"]);
        break;
        case '/inserir':
            include("View/forms/inserir.php");
        break;
        case '/criar_medicamento':
            criarMedicamento();
        break;
        case '/deletar':
            $data = select();
            include("View/forms/deletar.php");
        break;
        case '/deletar_medicamento':
            deletarMedicamento();
        break;
        case '/buscar':
            $data = selectFabricante();
            include("View/forms/buscar.php");
        break;
        case '/buscar_fabricante':
            $data = buscarFabricante();
            include("View/lista.php");
        break;
        case '/buscar_nome':
            $data = buscarNome();
            include("View/lista.php");
        break;
        case '/buscar_controle':
            $data = buscarControlado();
            include("View/lista.php");
        break;
        case '/buscar_qt5':
            $data = buscarQtMenor();
            include("View/lista.php");
        break;
        case '/buscar_preco':
            $data = buscarPreco();
            include("View/lista.php");
        break;
        case '/buscar_qt':
            $data = buscarQt();
            include("View/lista.php");
        break;
        case '/editar':
            $data = select();
            include("View/forms/atualizar.php");
        break;
        case '/atualizar_form':
            $data = getAtualizarForm();
            include("View/forms/atualizarForm.php");
        break;
        case '/atualizar_medicamento':
            $id = explode("?",$path)[1];
            atualizarMedicamento($id);
        break;
    }

}