<?php

namespace Eyghtdigit\MacroEssentials\Tests\Feature;

use Eyghtdigit\MacroEssentials\Macros\CollectionMacros;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Orchestra\Testbench\TestCase;

class CollectionTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Collection::mixin(new CollectionMacros(), true);
    }


    /** @test */
    public function array_element_send_to_back_test()
    {
        $array = ['ONE', 'TWO', 'THREE'];
        dd(collect($array)->sendToEnd('ONE'));
    }

}