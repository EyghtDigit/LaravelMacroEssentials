<?php

namespace Eyghtdigit\MacroEssentials\Macros;

use Illuminate\Support\Str;

class StrMacros
{

    public function snakeToTitle()
    {
        return function ($text) {
            return Str::title(str_replace('_', ' ', $text));
        };
    }

    public function snakeToLowercase()
    {
        return function ($str) {
            return Str::lower(str_replace('_', ' ', $str));
        };
    }
}