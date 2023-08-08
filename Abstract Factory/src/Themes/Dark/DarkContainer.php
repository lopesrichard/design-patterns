<?php

namespace AbstractFactory\Themes\Dark;

use AbstractFactory\Interfaces\Widget;
use AbstractFactory\Interfaces\Container;

use AbstractFactory\Themes\Color;
use AbstractFactory\Themes\Stylesheet;

use AbstractFactory\Themes\Enum\Display;
use AbstractFactory\Themes\Enum\BorderStyle;
use AbstractFactory\Themes\Enum\AlignItems;
use AbstractFactory\Themes\Enum\JustifyContent;

class DarkContainer implements Container
{
    private $children;

    public function add(Widget $widget): void
    {
        $this->children[] = $widget;
    }

    public function render(): string
    {
        $style = new Stylesheet();
        $style->setHeight(100);
        $style->setBackgroundColor(Color::fromRGB(0, 0, 0));
        $style->setPadding(50, 50, 50, 50);
        $style->setBorder(5, BorderStyle::DOTTED, new Color('#FFFFFF'));
        $style->setDisplay(Display::FLEX);
        $style->setAlignItems(AlignItems::CENTER);
        $style->setJustifyContent(JustifyContent::CENTER);

        $render  = "<div style='{$style->makeStyle()}'>";
        foreach ($this->children as $child) {
            $render .= $child->render();
        }
        $render .= '</div>';

        return $render;
    }
}
