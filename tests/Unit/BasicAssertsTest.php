<?php

namespace ZenCoreSpA\UI\Tests\Unit;

use ZenCoreSpA\UI\Tests\TestCase;

class BasicAssertsTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testFalseIsFalse()
    {
        $this->assertFalse(false);
    }
}