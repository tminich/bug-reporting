<?php

namespace Test\Classes;


use Test\Classes\MyNamespace\TestClass;

class MyClass {
    public function test(): void
    {
        $x = new TestClass();
        Handler::test();
    }


}