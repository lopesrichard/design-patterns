<?php

namespace AbstractFactory\Interfaces;

interface Container extends Widget
{
    public function add(Widget $widget): void;
}
