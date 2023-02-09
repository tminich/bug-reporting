<?php

namespace Test\Concerns;

use JetBrains\PhpStorm\Immutable;

trait MyTrait
{
    #[Immutable]
    protected ?string $my_attribute = null;

    private function test(): void
    {

    }
}