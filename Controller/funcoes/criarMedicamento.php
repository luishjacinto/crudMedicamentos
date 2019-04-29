<?php
function criarMedicamento(){

    $medicamento = new Medicamento($_POST["nome"],$_POST["fabricante"],intval($_POST["controlado"]),intval($_POST["qt"]),$_POST["preco"]);

    $medicamentoDAO = new MedicamentoDAO();

    $medicamentoDAO->insert($medicamento);

    header("Location: /");
}
?>