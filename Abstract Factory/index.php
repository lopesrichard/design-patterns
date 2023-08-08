<?php

require_once 'vendor/autoload.php';

/**
 * NESSE EXEMPLO SIMULAMOS UM PROGRAMA QUE SUPORTA DIVERSOS TEMAS
 * A FUNÇÃO PRINCIPAL MAIN DEVE RECEBER UM ABSTRACT FACTORY
 * RESPONSÁVEL POR CRIAR OS COMPONENTES DA INTERFACE GRÁFICA
 */

function main(\AbstractFactory\Interfaces\ThemeFactory $factory) {
    global $themes;

    $container = $factory->makeContainer();

    $button = $factory->makeButton();
    $button->setText('Change');
    $button->onPress(function () use ($themes) {
        $index = array_search($_GET['theme'], $themes);
        $next = $themes[$index + 1] ?? $themes[0];
        return "window.location.href = \"?theme=$next\"";
    });

    $container->add($button);

    echo $container->render();
}

/**
 * APENAS UM HELPER PARA FACILITAR O REDIRECT
 */

function redirect($theme) {
    header("Location: ?theme=$theme");
    exit;
}

/**
 * AQUI APENAS SELECIONAMOS A ABSTRACT FACTORY DE ACORDO COM O PARÂMETRO DA URL
 */

$factories = [
    'Sky' => new \AbstractFactory\Themes\Sky\SkyFactory(),
    'Fashion' => new \AbstractFactory\Themes\Fashion\FashionFactory(),
    'Dark' => new \AbstractFactory\Themes\Dark\DarkFactory(),
];

$themes = array_keys($factories);

!isset($_GET['theme']) && redirect($themes[0]);
!isset($factories[$_GET['theme']]) && redirect($themes[0]);

$factory = $factories[$_GET['theme']];

/**
 * POR ÚLTIMO CHAMAMOS A FUNÇÃO PRINCIPAL QUE RECEBER COMO PARÂMETRO A ABSTRACT FACTORY
 */

main($factory);
