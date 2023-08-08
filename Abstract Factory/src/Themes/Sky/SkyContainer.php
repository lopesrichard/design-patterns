<?php

namespace AbstractFactory\Themes\Sky;

use AbstractFactory\Interfaces\Widget;
use AbstractFactory\Interfaces\Container;

use AbstractFactory\Themes\Color;
use AbstractFactory\Themes\Stylesheet;

use AbstractFactory\Themes\Enum\Display;
use AbstractFactory\Themes\Enum\BorderStyle;
use AbstractFactory\Themes\Enum\AlignItems;
use AbstractFactory\Themes\Enum\JustifyContent;

class SkyContainer implements Container
{
    private $children;

    public function add(Widget $widget): void
    {
        $this->children[] = $widget;
    }

    public function render(): string
    {
        $style = new Stylesheet();
        $style->setHeight(500);
        $style->setBackgroundColor(Color::fromRGB(230, 230, 230));
        $style->setPadding(50, 50, 50, 50);
        $style->setBorder(2, BorderStyle::SOLID, new Color('#0040a9'));
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
