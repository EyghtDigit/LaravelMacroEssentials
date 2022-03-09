<?php

namespace Eyghtdigit\MacroEssentials;

use Eyghtdigit\MacroEssentials\Macros\CollectionMacros;
use Eyghtdigit\MacroEssentials\Macros\StrMacros;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class MacroEssentialsServiceProvider extends ServiceProvider
{


    public function boot()
    {
        Str::mixin(new StrMacros(), false);
        Collection::mixin(new CollectionMacros(), false);
    }
}