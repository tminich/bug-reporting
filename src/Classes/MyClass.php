<?php

namespace Test\Classes;


use Test\Classes\Concerns\MyTrait;

class MyClass {
    use MyTrait {
        test as protected traitTest;
    }

    public static function test(): void
    {
        static::traitTest();
    }


}