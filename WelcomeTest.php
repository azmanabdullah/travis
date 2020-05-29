<?php

namespace Azman;

use PHPUnit\Framework\TestCase;

class WelcomeTest extends TestCase
{
    public function testHelloWorld()
    {
        $wel = new Welcome();
        $this->assertEquals("Halo dunia", $wel->index());
    }
}
