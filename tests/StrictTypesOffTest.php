<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

final class StrictTypesOffTest extends TestCase
{

    public function testStringsThatLookLikeInts()
    {
        require_once(realpath(dirname(__FILE__)) . "/sample_functions.php");
        $result = sum_with_typed_args("1", "2");
        $this->assertEquals($result, 3);
    }

    public function testStringsThatDontLookLikeInts()
    {
        require_once(realpath(dirname(__FILE__)) . "/sample_functions.php");
        $this->expectException(\TypeError::class);
        sum_with_typed_args("hello", "hi");
    }

    public function testBadReturn()
    {
        require_once(realpath(dirname(__FILE__)) . "/sample_functions.php");
        $result = return_string_that_looks_like_int();
        $this->assertEquals($result, 123);
        $this->assertTrue(is_int($result));
    }

    public function testBadReturn2()
    {
        require_once(realpath(dirname(__FILE__)) . "/sample_functions.php");
        $this->expectException(\TypeError::class);
        $result = return_string_that_doesnt_look_like_int();
    }
}
