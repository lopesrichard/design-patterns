<?php

namespace AbstractFactory\Themes\Dark;

use AbstractFactory\Interfaces\Button;
use AbstractFactory\Interfaces\Container;
use AbstractFactory\Interfaces\ThemeFactory;

class DarkFactory implements ThemeFactory
{
    public function makeButton(): Button
    {
        return new DarkButton();
    }

    public function makeContainer(): Container
    {
        return new DarkContainer();
    }
}
