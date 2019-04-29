<?php
function deletarMedicamento(){

    $medicamentoDAO = new MedicamentoDAO();

    $medicamentoDAO->delete($_POST["medicamento"]);
    
    header("Location: /");
}
?>