<?php

namespace Eyghtdigit\MacroEssentials\Tests\Feature;

use Eyghtdigit\MacroEssentials\Macros\ArrayMacros;
use Illuminate\Support\Arr;
use Orchestra\Testbench\TestCase;

class ArrayTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Arr::mixin(new ArrayMacros(), true);
    }


    /** @test */
    public function array_element_send_to_back_test()
    {
        $array = ['ONE', 'TWO', 'THREE'];
        dd($array->sendToEnd());
    }

}