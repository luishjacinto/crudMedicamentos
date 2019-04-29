<?php
function selectFabricante(){
    $medicamentoDAO = new MedicamentoDAO();

    $list = $medicamentoDAO->list();
    $select = '';

    $fabricantes = array();

    foreach($list as $med){
        $fab = $med->getFBCTR();
        if(in_array($fab, $fabricantes)){
        }else{
            array_push($fabricantes,$med->getFBCTR());
        }
    }
    foreach($fabricantes as $fabricante){
        $select .= '<option value="'.$fabricante.'"> '.$fabricante.' </option>';
    }
    return $select;
}
?>