<?php

namespace Lkt\Factory\Schemas\Fields;

use Lkt\Factory\Schemas\Traits\FieldWithFormatsOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithNullOptionTrait;

class UnixTimeStampField extends AbstractField
{
    use FieldWithNullOptionTrait,
        FieldWithFormatsOptionTrait;
}