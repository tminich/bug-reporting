<?php

namespace Test\Classes;

use Test\Concerns\MyTrait;

class MyClassOld
{
    use MyTrait;

    public function __construct()
    {
        $this->my_attribute = 'x';
        $this->test();
    }


}