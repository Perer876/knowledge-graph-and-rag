<?php

declare(strict_types=1);

namespace Tools\Math;

function fibonacci(int $value): int
{
    if ($value === 0) {
        return 0;
    }

    if ($value === 1) {
        return 1;
    }

    return fibonacci($value - 1) + fibonacci($value - 2);
}

function factorial(int $value): int
{
    if ($value === 0) {
        return 1;
    }

    return $value * factorial($value - 1);
}

function isPrime(int $value): bool
{
    if ($value < 2) {
        return false;
    }

    $sqrt = sqrt($value);

    for ($i = 2; $i <= $sqrt; $i++) {
        if ($value % $i === 0) {
            return false;
        }
    }

    return true;
}
