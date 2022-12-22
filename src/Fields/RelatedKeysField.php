<?php

namespace Lkt\Factory\Schemas\Fields;

use Lkt\Factory\Schemas\Traits\FieldWithComponentOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithOrderOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithSoftTypedOptionTrait;
use Lkt\Factory\Schemas\Traits\FieldWithWhereOptionTrait;

class RelatedKeysField extends AbstractField
{
    use FieldWithComponentOptionTrait,
        FieldWithWhereOptionTrait,
        FieldWithOrderOptionTrait,
        FieldWithSoftTypedOptionTrait;

    final public static function defineRelation(string $component, string $name, string $column = ''): static
    {
        return (new static($name, $column))->setComponent($component);
    }
}