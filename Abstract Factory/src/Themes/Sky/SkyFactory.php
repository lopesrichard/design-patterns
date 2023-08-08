<?php

namespace AbstractFactory\Themes\Sky;

use AbstractFactory\Interfaces\Button;
use AbstractFactory\Interfaces\Container;
use AbstractFactory\Interfaces\ThemeFactory;

class SkyFactory implements ThemeFactory
{
    public function makeButton(): Button
    {
        return new SkyButton();
    }

    public function makeContainer(): Container
    {
        return new SkyContainer();
    }
}
