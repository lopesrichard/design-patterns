<?php

namespace AbstractFactory\Themes\Fashion;

use AbstractFactory\Interfaces\Button;
use AbstractFactory\Interfaces\Container;
use AbstractFactory\Interfaces\ThemeFactory;

class FashionFactory implements ThemeFactory
{
    public function makeButton(): Button
    {
        return new FashionButton();
    }

    public function makeContainer(): Container
    {
        return new FashionContainer();
    }
}
