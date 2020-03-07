<?php

namespace AbstractFactory\Themes;

final class Color
{
    private $color;

    public function __construct(string $hex)
    {
        $this->color = $hex;
    }

    public static function fromRGB(int $red, int $green, int $blue): self
    {
        return new self(sprintf("#%02x%02x%02x", $red, $green, $blue));
    }

    public function getColor(): string
    {
        return $this->color;
    }
}
