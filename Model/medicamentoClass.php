<?php 

class Medicamento {
    private $id;
    private $name;
    private $fbctr;
    private $ctrl;
    private $qtd;
    private $price;
 
    function __construct($_name, $_fbctr, $_ctrl, $_qtd, $_price) {
        $this->name = $_name;
        $this->fbctr = $_fbctr;
        $this->ctrl = $_ctrl;
        $this->qtd = $_qtd;
        $this->price = $_price;
    }

    //setters

    public function setID($_id) {
        $this->id = $_id;
    }

    public function setName($_name) {
        $this->name = $_name;
    }

    public function setFBCTR($_fbctr) {
        $this->fbctr = $_fbctr;
    }

    public function setCTRL($_ctrl) {
        $this->ctrl = $_ctrl;
    }

    public function setQTD($_qtd) {
        $this->qtd = $_qtd;
    }

    public function setPrice($_price) {
        $this->price = $_price;
    }

    //getters

    public function getID() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getFBCTR() {
        return $this->fbctr;
    }

    public function getCTRL() {
        return $this->ctrl;
    }

    public function getQTD() {
        return $this->qtd;
    }

    public function getPrice() {
        return $this->price;
    }

    //to string

    public function __toString() {
        try {
            return (string) 'Nome: '.$this->name.' Fabricante: '.$this->fbctr.' Controlado: '.$this->ctrl.' QT: '.$this->qtd.' Preço: '.$this->price;
        } 
        catch (Exception $exception) {
            return '';
        }
    }
}

?> 