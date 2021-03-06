<?php

namespace PHPTracker\Bencode\Value;

/**
 * Decoded bencode list, consisting of mutiple values.
 *
 * Unfortunately "List" is a reserved word.
 *
 * @package PHPTracker
 * @subpackage Bencode
 */
class ListValue extends Container
{
    /**
     * Adds an item to the list.
     *
     * @param AbstractValue $sub_value
     * @param String $key Not used here.
     */
    public function contain( AbstractValue $sub_value, String $key = null )
    {
        $this->value[] = $sub_value;
    }

    /**
     * Convert the object back to a bencoded string when used as string.
     */
    public function __toString()
    {
        $string_represent = "l";
        foreach ( $this->value as $sub_value )
        {
            $string_represent .= $sub_value;
        }
        return $string_represent . "e";
    }
}
