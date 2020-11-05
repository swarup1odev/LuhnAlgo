<?php

namespace LuhnAlgorithm;

use PHPUnit\Framework\TestCase;

class CreditNumberTest extends TestCase
{
    public function testCreditNumber()
    {
        $object = new CreditNumber();
        $cardNumber = $object->numberGenerate(487,16);
        //$this->assertStringStartsWith("7", $cardNumber);
        $this->assertSame(16, strlen($cardNumber));
        //$this->assertSame(16, $object->numberGenerate());
    }
}
