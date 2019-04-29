<?php
function buscarQtMenor(){

    $medicamentoDAO = new MedicamentoDAO();

    $medicamentos = $medicamentoDAO->searchQtMenor();

    $h1 = '<h1>Medicamentos com menos de 5 unidades</h1>';

    $table = $h1.'<table><tr><th>Id</th><th>Nome</th>
    <th>Fabricante</th><th>Controlado</th><th>Qt</th><th>Preço</th>
    </tr>'; 

    foreach ($medicamentos as $medicamento){
        if ($medicamento->getCTRL() == 0){
            $medC = 'N';
        } else {
            $medC = 'S';
        }
        $table .= '<tr><td>'.$medicamento->getID().'</td><td>'.$medicamento->getName().'</td>
        <td>'.$medicamento->getFBCTR().'</td>
        <td>'.$medC.'</td>
        <td>'.$medicamento->getQTD().'</td>
        <td>$'.$medicamento->getPrice().'</td></tr>';
    } 

    $table .= '</table>';

    return $table;
}
?>