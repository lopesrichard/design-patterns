<?php

namespace AbstractFactory\Interfaces;

interface Button extends Widget
{
    public function setText(string $text): void;
    public function onPress(callable $callback): void;
}
