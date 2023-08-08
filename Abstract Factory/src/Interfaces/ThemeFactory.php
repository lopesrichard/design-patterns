<?php

namespace AbstractFactory\Interfaces;

interface ThemeFactory
{
    public function makeContainer(): Container;
    public function makeButton(): Button;
}
