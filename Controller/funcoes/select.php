<?php
function select(){
    $medicamentoDAO = new MedicamentoDAO();

    $list = $medicamentoDAO->list();
    $select = '';

    foreach($list as $med){
        $select .= '<option value="'.$med->getID().'"> '.$med->getName().' </option>';
    }
    return $select;
}
?>