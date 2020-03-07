<?php

namespace AbstractFactory\Themes;

use AbstractFactory\Themes\Color;

final class Stylesheet
{
    private $fontSize;
    private $color;
    private $backgroundColor;
    private $padding;
    private $border;
    private $borderRadius;
    private $display;
    private $alignItems;
    private $justifyContent;
    private $height;
    private $width;

    public function setFontSize(int $fontSize): void
    {
        $this->fontSize = $fontSize;
    }

    public function setColor(Color $color): void
    {
        $this->color = $color;
    }

    public function setBackgroundColor(Color $backgroundColor): void
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function setPadding(int $left, int $top, int $right, int $bottom): void
    {
        $this->padding = "{$left}px {$top}px {$right}px {$bottom}px";
    }

    public function setBorder(int $width, string $style, Color $color): void
    {
        $this->border = "{$width}px {$style} {$color->getColor()}";
    }

    public function setBorderRadius(int $borderRadius): void
    {
        $this->borderRadius = "{$borderRadius}px";
    }

    public function setDisplay(string $display): void
    {
        $this->display = $display;
    }

    public function setAlignItems(string $alignItems): void
    {
        $this->alignItems = $alignItems;
    }

    public function setJustifyContent(string $justifyContent): void
    {
        $this->justifyContent = $justifyContent;
    }

    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    public function setWidth(string $width): void
    {
        $this->width = $width;
    }

    public function makeStyle(): string
    {
        $style  = '';

        if ($this->fontSize !== null) {
            $style .= "font-size:{$this->fontSize}px;";
        }

        if ($this->color !== null) {
            $style .= "color:{$this->color->getColor()};";
        }

        if ($this->backgroundColor !== null) {
            $style .= "background-color:{$this->backgroundColor->getColor()};";
        }

        if ($this->padding !== null) {
            $style .= "padding:{$this->padding};";
        }

        if ($this->border !== null) {
            $style .= "border:{$this->border};";
        }

        if ($this->borderRadius !== null) {
            $style .= "border-radius:{$this->borderRadius}px;";
        }

        if ($this->display !== null) {
            $style .= "display:{$this->display};";
        }

        if ($this->alignItems !== null) {
            $style .= "align-items:{$this->alignItems};";
        }

        if ($this->justifyContent !== null) {
            $style .= "justify-content:{$this->justifyContent};";
        }

        if ($this->height !== null) {
            $style .= "height:{$this->height}px;";
        }

        if ($this->width !== null) {
            $style .= "width:{$this->width}px;";
        }

        return $style;
    }
}
