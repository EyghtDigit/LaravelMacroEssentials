<?php

namespace Eyghtdigit\MacroEssentials\Macros;

class ArrayMacros
{

    public function sendToEnd()
    {
        return function ($array, $element) {
            $index = array_search($element, $array);
            if ($index !== false) {
                array_splice($array, $index, 1);
                array_push($array, $element);
            }
            return $array;

        };
    }
}