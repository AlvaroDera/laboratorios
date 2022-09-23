<?php

class MiClase {
    const constante = 'valor constante';
    function mostrarConstante() {
        echo self::constante . "\n";
    }
}

////////////////////lab 7.2/////////////////////

abstract class ClaseAbstracta {
    //Se fuerza la herencia de la clase para definir estos metodos
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);
    //Metodo comun
    public function printOut() {
        print $this->tomarValor() . "<br>";
    }
}
//////////////////////////////////////////////
class ClaseConcreta1 extends ClaseAbstracta {
    protected function tomarValor() {
        return "ClaseConcreta1";
    }
    public function prefixValor($prefix) {
        return "{$prefix}ClaseConcreta1";
    }
}
///////////////////////////////////////////////
class ClaseConcreta2 extends ClaseAbstracta {
    protected function tomarValor() {
        return "ClaseConcreta2";
    }
    public function prefixValor($prefix) {
        return "{$prefix}ClaseConcreta2";
    }
}
///////////////////lab 7.3/////////////////////
interface iTemplate {
    public function ponerVariable($nombre, $var);
    public function verHtml($template);
}
///////////////////////////////////////////////
class Template implements iTemplate {
    private $vars = array();
    public function ponerVariable($nombre, $var) {
        $this->vars[$nombre] = $var;
    }
    public function verHtml($template) {
        foreach($this->vars as $nombre => $value) {
            $template = str_replace('{' . $nombre .'}', $value, $template);
        }
        return $template;
    }
}
?>