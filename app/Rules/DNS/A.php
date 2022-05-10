<?php

namespace App\Rules\DNS;

class A extends Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match("/^(([0-9]{1,3})(\.)){3}([0-9]{1,3})$/", $value);
    }

}
