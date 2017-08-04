<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{

    public function testIntZ(): void
    {
        $result = intZ(4);
        $this->assertEquals($result, 4);
    }

    public function testIntZException(): void
    {
        $this->expectException(\TypeError::class);
        intZ("hello");
    }
}
