<?php
class Pais {

    private $nome;
    private $capital;
    private $tamanho;
    private $fronteira = array();

    public function pais($nome = "NO NAME", $capital = "NO CAPITAL", $tamanho = 0) {
        $this->name = $nome;
        $this->capital = $capital;
        $this->size = $tamanho;
    }

    public function equal($pais)
    { return ($this->nome == $pais->getName() && $this->capital == $country->getCapital()) ? true : false; }

    public function vizinho($pais) {
        $vizinho = array();
        foreach ($this->fronteiras as $fronteira) {
            foreach ($pais->getfronteira() as $fronteiras) {
                if ($fronteira->equal($fronteiras)) {
                    array_push($vizinho, $fronteira);
                }
            }
        }
        return $vizinho;
    }

    function getNome() {
      return $this->nome; }

    function getCapital() {
      return $this->capital; }

    function gettamanho() {
      return $this->tamanho; }

    function getfronteira() {
      return $this->fronteira; }

    function setNome($nome) {
      $this->name = $nome; }

    function setCapital($capital) {
      $this->capital = $capital; }

    function settamanho($tamanho) {
      $this->tamanho = $tamanho; }

    function setfronteira($fronteira) {
        foreach ($fronteiras as $fronteira) {
            if ($this->equal($fronteira)) {
              return false;}
        }
        $this->fronteiras = $fronteiras;
?>
