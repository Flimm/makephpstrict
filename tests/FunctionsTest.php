<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{

    public function testIntZ(): void
    {
        $result = intZ(4);
        $this->assertEquals($result, 4);
        $this->assertTrue(is_int($result));
    }

    public function testIntZException(): void
    {
        $this->expectException(\TypeError::class);
        intZ("hello");
    }

    public function testIntCasting(): void
    {
        $result = (int) "hello";
        $this->assertEquals($result, 0);
    }

    public function testIntval(): void
    {
        $result = intval("hello");
        $this->assertEquals($result, 0);
    }
}
