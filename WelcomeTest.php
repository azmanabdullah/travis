<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/Welcome.php';

class WelcomeTest extends TestCase {

  public function testHelloWorld() {
    $wel = new Welcome();

    $this->assertEquals("halo dunia", $wel->index());
  }

}
