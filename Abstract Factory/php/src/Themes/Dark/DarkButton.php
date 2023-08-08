<?php

namespace AbstractFactory\Themes\Dark;

use AbstractFactory\Interfaces\Button;

use AbstractFactory\Themes\Enum\Cursor;
use AbstractFactory\Themes\Color;
use AbstractFactory\Themes\Stylesheet;

use AbstractFactory\Themes\Enum\BorderStyle;

class DarkButton implements Button
{
    private $text;
    private $onPress;

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function onPress(callable $callback): void
    {
        $this->onPress = $callback();
    }

    public function render(): string
    {
        $style = new Stylesheet();
        $style->setCursor(Cursor::POINTER);
        $style->setFontSize(36);
        $style->setColor(Color::fromRGB(0, 0, 0));
        $style->setBackgroundColor(Color::fromRGB(255, 255, 255));
        $style->setPadding(20, 50, 20, 50);
        $style->setBorderRadius(10);

        return "<button style='{$style->makeStyle()}' onclick='{$this->onPress}'>{$this->text}</button>";
    }
}
