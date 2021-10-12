<?php

use PHPUnit\Framework\TestCase;

class falabellaTest extends TestCase {

    public function testRender() {

        require "falabella.php";

        $falabella = new falabella();

        $expect = ["Falabella","IT","Integraciones"];

        $this->assertEquals(0, count(array_diff($expect, $falabella->render())),'Todas las respuestas coinciden con Falabella IT Integraciones');

    }

}