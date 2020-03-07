<?php

namespace AbstractFactory\Themes\Fashion;

use AbstractFactory\Themes\Color;
use AbstractFactory\Interfaces\Button;
use AbstractFactory\Themes\Stylesheet;

class FashionButton implements Button
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
        $style->setFontSize(14);
        $style->setColor(Color::fromRGB(255, 255, 255));
        $style->setBackgroundColor(Color::fromRGB(177, 7, 164));
        $style->setPadding(10, 30, 10, 30);
        $style->setBorder(0, 'solid', new Color('#ffffff'));
        $style->setBorderRadius(50);

        return "<button style='{$style->makeStyle()}' onclick='{$this->onPress}'>{$this->text}</button>";
    }
}
