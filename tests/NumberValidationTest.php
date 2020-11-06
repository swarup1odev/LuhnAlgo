<?php

namespace LuhnAlgorithm;

use PHPUnit\Framework\TestCase;

class NumberValidationTest extends TestCase
{
    public function testValidateNumber()
    {
        $object = new NumberValidation();
        $this->assertTrue($object->validateNumber(7109382625691503));
        $this->assertTrue($object->validateNumber(375391621075290));
        $this->assertTrue($object->validateNumber(4875560310001240));
    }
}
