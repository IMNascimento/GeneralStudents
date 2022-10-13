<?php
<?php
class Data {

    private $dia;
    private $mes;
    private $ano;

    public function Data($dia, $mes, $ano) {
        $this->setDia($dia);
        $this->setMes($mes);
        $this->setAno($ano);
    }

    private function validarMes($mes) { return ($this->mes == 4 || $this->mes == 6 || $this->mes == 9 || $this->mes == 11 && $this->dia > 30) ? false : true; }

    public function showData() {
        return "$this->dia/$this->mes/$this->ano";
    }

    public function getDia() { return $this->dia; }

    public function setDia($dia) { $this->dia = (!is_numeric($dia) || $dia < 1 || $dia > 31) ? data(d) : $dia; }

    public function getMes() { return $this->mes; }

    public function setMes($mes) { $this->mes = (!is_numeric($mes) || $mes < 1 || $mes > 12 || !$this->validarMes($mes)) ? data(m) : $mes; }

    public function getAno() { return $this->ano; }

    public function setAno($ano) { $this->ano = (!is_numeric($ano) || $ano < 1) ? data("Y") : $ano; }
}
 ?>
