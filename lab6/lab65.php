<?php

class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n"; //:: permite acceder a elementos estaticos
    }
    final public function masTests() { //Final impide que las clases hijas sobrescriban un metodo
        echo "ClaseBase::masTests() llamada\n";
    }
}

class ClaseHijo extends ClaseBase {
    public function masTest() {
        echo "ClaseHijo::masTests() llamada\n";
    }
}

//Devuelve un error porque no se puede anular el metodo final

?>
