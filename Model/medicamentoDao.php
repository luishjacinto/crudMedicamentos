<?php 

class MedicamentoDAO {
    
    public function insert($m) {
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = "INSERT INTO medicamento (nome, fabricante, controlado, quantidade, preco) VALUES ('".$m->getName()."','". $m->getFBCTR()."'," .$m->getCTRL().",". $m->getQTD().",". $m->getPrice().");";

        $db->query($query);
        $db->con_close();
    }

    public function delete($_id) {
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = "DELETE FROM medicamento WHERE id = $_id;";

        $db->query($query);

        $db->con_close();
    }

    public function searchID($_id){
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = "SELECT * FROM medicamento WHERE id = $_id;";

        $m = $db->query($query);
        $med = $db->fetchLista($m);

        foreach ($med as $line){
            $medicamento = new Medicamento($line[1], $line[2], $line[3], $line[4], $line[5]);
            $medicamento->setID($line[0]);
        }

        $db->con_close();

        return $medicamento;
    }

    public function searchNome($nome){
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        $query = 'SELECT * FROM medicamento WHERE nome LIKE "%'.$nome .'%"  ;';

        $m = $db->query($query);
        $med = $db->fetchLista($m);

        $list = array();
        foreach ($med as $line){
            $m = new Medicamento($line[1], $line[2], $line[3], $line[4], $line[5]);
            $m->setID($line[0]);
            array_push($list,$m);
        }
        $db->con_close();
        return $list;
    }

    public function searchFabricante($fabricante){
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = 'SELECT * FROM medicamento WHERE fabricante = "'. $fabricante .'"  ;';
        $m = $db->query($query);
        $med = $db->fetchLista($m);

        $list = array();
        foreach ($med as $line){
            $m = new Medicamento($line[1], $line[2], $line[3], $line[4], $line[5]);
            $m->setID($line[0]);
            array_push($list,$m);
        }
        $db->con_close();
        return $list;
    }

    public function searchControlado($_controlado){
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = 'SELECT * FROM medicamento WHERE controlado =  '.$_controlado.';';
        $m = $db->query($query);
        $med = $db->fetchLista($m);

        $list = array();
        foreach ($med as $line){
            $m = new Medicamento($line[1], $line[2], $line[3], $line[4], $line[5]);
            $m->setID($line[0]);
            array_push($list,$m);
        }
        $db->con_close();
        return $list;
    }

    public function searchQtMenor(){
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = 'SELECT * FROM medicamento WHERE quantidade < 5;';

        $m = $db->query($query);
        $med = $db->fetchLista($m);

        $list = array();
        foreach ($med as $line){
            $m = new Medicamento($line[1], $line[2], $line[3], $line[4], $line[5]);
            $m->setID($line[0]);
            array_push($list,$m);
        }
        $db->con_close();
        return $list;
    }

    public function searchPreco(){
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = "SELECT * FROM medicamento ORDER BY preco;";

        $m = $db->query($query);
        $med = $db->fetchLista($m);

        $list = array();
        foreach ($med as $line){
            $m = new Medicamento($line[1], $line[2], $line[3], $line[4], $line[5]);
            $m->setID($line[0]);
            array_push($list,$m);
        }
        $db->con_close();
        return $list;
    }

    public function searchQt(){
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = "SELECT * FROM medicamento ORDER BY quantidade;";

        $m = $db->query($query);
        $med = $db->fetchLista($m);

        $list = array();
        foreach ($med as $line){
            $m = new Medicamento($line[1], $line[2], $line[3], $line[4], $line[5]);
            $m->setID($line[0]);
            array_push($list,$m);
        }
        $db->con_close();
        return $list;
    }

    public function list(){
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        
        $query = "SELECT * FROM medicamento;";

        $m = $db->query($query);
        $med = $db->fetchLista($m);

        $list = array();
        foreach ($med as $line){
            $m = new Medicamento($line[1], $line[2], $line[3], $line[4], $line[5]);
            $m->setID($line[0]);
            array_push($list,$m);
        }
        $db->con_close();
        return $list;
    }

    public function update($med) {
        $db = new Database("localhost","root","");
        $db->selectDB("farmacia");
        $query = "UPDATE medicamento SET nome ='".$med->getName()."', fabricante = '".$med->getFBCTR()."', controlado = ".$med->getCTRL().", quantidade = ".$med->getQTD().", preco = ".$med->getPrice()." WHERE id = ".$med->getID()."";
        $db->query($query);

        $db->con_close();
    }

}

?> 