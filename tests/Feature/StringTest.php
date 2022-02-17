<?php

namespace Eyghtdigit\MacroEssentials\Tests\Feature;

use Eyghtdigit\MacroEssentials\Macros\StrMacros;
use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase;

class StringTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Str::mixin(new StrMacros(), true);
    }

    /** @test */
    public function snake_to_title_test()
    {

        $text = 'snake_to_title';
        $expected = 'Snake To Title';
        $this->assertEquals($expected, Str::snakeToTitle($text));
    }

    /** @test */
    public function snake_to_lowercase_test()
    {
        $text = 'snake_to_lowercase';
        $expected = 'snake to lowercase';
        $this->assertEquals($expected, Str::snakeToLowercase($text));
    }


}