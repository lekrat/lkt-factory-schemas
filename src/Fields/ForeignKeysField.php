<?php

namespace Lkt\Factory\Schemas\Fields;

use Lkt\Factory\Schemas\Traits\FieldWithAllowAnonymousOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithNullOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithComponentOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithOrderOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithSoftTypedOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithWhereOptionTrait;

class ForeignKeysField extends AbstractField
{
    use FieldWithComponentOptionTrait,
        FieldWithWhereOptionTrait,
        FieldWithOrderOptionTrait,
        FieldWithSoftTypedOptionTrait,
        FieldWithAllowAnonymousOptionTrait,
        FieldWithNullOptionTrait;

    final public static function defineRelation(string $component, string $name, string $column = ''): self
    {
        return (new static($name, $column))->setComponent($component);
    }
}