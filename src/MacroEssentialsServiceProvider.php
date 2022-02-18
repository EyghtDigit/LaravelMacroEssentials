<?php

namespace Eyghtdigit\MacroEssentials;

use Eyghtdigit\MacroEssentials\Macros\ArrayMacros;
use Eyghtdigit\MacroEssentials\Macros\StrMacros;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class MacroEssentialsServiceProvider extends ServiceProvider
{


    public function boot()
    {
        Str::mixin(new StrMacros(), false);
        Arr::mixin(new ArrayMacros(), false);
    }
}