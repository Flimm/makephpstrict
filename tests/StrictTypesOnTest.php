<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class StrictTypesOnTest extends TestCase
{

    public function testOne()
    {
        require_once(realpath(dirname(__FILE__)) . "/sample_functions.php");
        $this->expectException(\TypeError::class);
        $result = sum_with_typed_args("1", "2");
    }
}
