<?php

namespace Piotzkhider\NonUnicodeValidation\Concerns;

trait ValidatesAttributes
{

    /**
     * Validate that an attribute contains only alphabetic characters.
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
     */
    public function validateAlpha($attribute, $value)
    {
        return is_string($value) && preg_match('/^[a-zA-Z]+$/', $value);
    }

    /**
     * Validate that an attribute contains only alpha-numeric characters, dashes, and underscores.
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
     */
    public function validateAlphaDash($attribute, $value)
    {
        if (! is_string($value) && ! is_numeric($value)) {
            return false;
        }

        return preg_match('/^[a-zA-Z_-]+$/', $value) > 0;
    }

    /**
     * Validate that an attribute contains only alpha-numeric characters.
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return bool
     */
    public function validateAlphaNum($attribute, $value)
    {
        if (! is_string($value) && ! is_numeric($value)) {
            return false;
        }

        return preg_match('/^[a-zA-Z0-9]+$/', $value) > 0;
    }
}
