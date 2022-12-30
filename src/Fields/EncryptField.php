<?php

namespace Lkt\Factory\Schemas\Fields;

use Lkt\Factory\Schemas\Traits\FieldWithNullOptionTrait;
use Lkt\Factory\Schemas\Values\SecureSeedValue;

class EncryptField extends AbstractField
{
    use FieldWithNullOptionTrait;

    protected string $algorithm = 'sha256';
    protected bool $hashMode = false;
    protected ?SecureSeedValue $secureSeed = null;

    public function setAlgorithmSHA256(): static
    {
        $this->algorithm = 'sha256';
        return $this;
    }

    public function hasAlgorithmSHA256(): bool
    {
        return $this->algorithm === 'sha256';
    }

    public function setSecureSeed(string $secureSeed): static
    {
        $this->secureSeed = new SecureSeedValue($secureSeed);
        return $this;
    }

    public function getSecureSeed(): string
    {
        return $this->secureSeed->getValue();
    }

    public function setHashMode(bool $status = true): static
    {
        $this->hashMode = $status;
        return $this;
    }

    public function isHashMode(): bool
    {
        return $this->hashMode;
    }

    public static function sha256(string $secureSeed, string $name, string $column = ''): static
    {
        return (new static($name, $column))->setAlgorithmSHA256()->setSecureSeed($secureSeed);
    }

    public static function sha256Hash(string $secureSeed, string $name, string $column = ''): static
    {
        return (new static($name, $column))->setAlgorithmSHA256()->setSecureSeed($secureSeed)->setHashMode();
    }
}