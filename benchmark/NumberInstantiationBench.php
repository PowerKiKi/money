<?php

declare(strict_types=1);

namespace Benchmark\Money;

use Money\Currency;
use Money\Number;
use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;

/**
 * @BeforeMethods({"setUp"})
 */
final class NumberInstantiationBench
{
    /** @var Currency */
    private $currency;

    public function setUp(): void
    {
        $this->currency = new Currency('EUR');
    }

    public function benchConstructorWithZeroIntegerAmount(): void
    {
        new Number('0', '');
    }

    public function benchConstructorWithPositiveIntegerAmount(): void
    {
        new Number('1234567890', '');
    }

    public function benchConstructorWithNegativeIntegerAmount(): void
    {
        new Number('-1234567890', '');
    }

    public function benchConstructorWithZeroAndFractionalAmount(): void
    {
        new Number('0', '1234567890');
    }

    public function benchConstructorWithFractionalAmount(): void
    {
        new Number('1234567890', '1234567890');
    }

    public function benchConstructorWithNegativeFractionalAmount(): void
    {
        new Number('-1234567890', '1234567890');
    }

    public function benchFromStringWithZeroIntegerAmount(): void
    {
        Number::fromString('0');
    }

    public function benchFromStringWithPositiveIntegerAmount(): void
    {
        Number::fromString('1234567890');
    }

    public function benchFromStringWithNegativeIntegerAmount(): void
    {
        Number::fromString('-1234567890');
    }

    public function benchFromStringWithZeroAndFractionalAmount(): void
    {
        Number::fromString('0.1234567890');
    }

    public function benchFromStringWithFractionalAmount(): void
    {
        Number::fromString('1234567890.1234567890');
    }

    public function benchFromStringWithNegativeFractionalAmount(): void
    {
        Number::fromString('-1234567890.1234567890');
    }
}
