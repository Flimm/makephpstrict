<?php

function sum_with_typed_args(int $a, int $b): int
{
    return $a + $b;
}


function return_string_that_looks_like_int(): int
{
    return "123";
}

function return_string_that_doesnt_look_like_int(): int
{
    return "hello";
}
