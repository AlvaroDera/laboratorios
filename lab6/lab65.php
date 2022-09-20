<?php

class ClaseBase {
    public function test() {
        echo "ClaseBase::test() llamada\n";
    }
    final public function masTests() {
        echo "ClaseBase::masTests() llamada\n";
    }
}

class ClaseHijo extends ClaseBase {
    public function masTest() {
        echo "ClaseHijo::masTests() llamada\n";
    }
}

?>