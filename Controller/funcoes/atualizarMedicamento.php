<?php
function atualizarMedicamento($id){
    $medicamento = new Medicamento($_POST["nome"],$_POST["fabricante"],intval($_POST["controlado"]),intval($_POST["qt"]),$_POST["preco"]);
    $medicamento->setID($id);
    $medicamentoDAO = new MedicamentoDAO();

    $medicamentoDAO->update($medicamento);

    header("Location: /");
}
?>