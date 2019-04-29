<?php
function getAtualizarForm(){
    $medicamentoDAO = new MedicamentoDAO();
    //echo $_POST["medicamento"];
    $medicamento = $medicamentoDAO->searchID($_POST["medicamento"]);
    //echo($medicamento);
    $form = '<form action="/atualizar_medicamento?'.$_POST["medicamento"].'" method="post">Nome:
    <input type="text" name="nome" value='.$medicamento->getName().' required><br>
    Fabricante:
    <input type="text" name="fabricante" value='.$medicamento->getFBCTR().' required><br><br>
    Controlado:
    <select name="controlado">';
    if($medicamento->getCTRL() == 0){
        $form .= '<option value="0" selected>Não</option>
        <option value="1">Sim</option>';
    }else{
        $form .= '<option value="0">Não</option>
        <option value="1" selected>Sim</option>';
    }
    $form .='</select>
    <br>Quantidade:
    <input type="number" name="qt" value='.$medicamento->getQTD().' required><br>
    Preço:
    <input type="number" name="preco" value='.$medicamento->getPrice().' required><br><input type="submit" value="Editar" required>
    </form>';
    return $form;
}
?>