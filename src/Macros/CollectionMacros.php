<?php

namespace Eyghtdigit\MacroEssentials\Macros;

class CollectionMacros
{



    public function sendToEnd()
    {
        return function ($array, $element, $strict = false) {
            $index = array_search($element, $array, $strict);
            if ($index !== false) {
                array_splice($array, $index, 1);
                array_push($array, $element);
            }
            return $array;

        };
    }

}