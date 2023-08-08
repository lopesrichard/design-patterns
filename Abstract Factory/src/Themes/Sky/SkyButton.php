<?php

namespace AbstractFactory\Themes\Sky;

use AbstractFactory\Interfaces\Button;

use AbstractFactory\Themes\Enum\Cursor;
use AbstractFactory\Themes\Color;
use AbstractFactory\Themes\Stylesheet;

use AbstractFactory\Themes\Enum\BorderStyle;

class SkyButton implements Button
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
        $style->setFontSize(18);
        $style->setColor(Color::fromRGB(255, 255, 255));
        $style->setBackgroundColor(Color::fromRGB(46, 85, 148));
        $style->setPadding(5, 15, 5, 15);
        $style->setBorder(2, BorderStyle::SOLID, new Color('#0040a9'));

        return "<button style='{$style->makeStyle()}' onclick='{$this->onPress}'>{$this->text}</button>";
    }
}
