<?php

namespace Piotzkhider\NonUnicodeValidation;

use Illuminate\Contracts\Validation\Validator as ValidatorContract;
use Piotzkhider\NonUnicodeValidation\Concerns\ValidatesAttributes;
use Illuminate\Validation\Validator as UnicodeValidator;

class Validator extends UnicodeValidator implements ValidatorContract
{
    use ValidatesAttributes;
}
