<?php

final class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n";
    }

    //Aquida igual si se declara el metodo como final o no

    final public function moreTesting() {
        echo "ClaseBase::moreTesting() llamada\n";
    }
}

class ClaseHijo extends ClaseBase {
    
}

//Envia un error porque la ClaseHijo no puede heredar de ClaseBase

?>