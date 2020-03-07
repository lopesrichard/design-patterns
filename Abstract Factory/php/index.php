<?php

require_once 'vendor/autoload.php';

/**
 * NESSE EXEMPLO SIMULAMOS UM PROGRAMA QUE SUPORTA DIVERSOS TEMAS
 * A FUNÇÃO PRINCIPAL MAIN DEVE RECEBER UM ABSTRACT FACTORY
 * RESPONSÁVEL POR CRIAR OS COMPONENTES DA INTERFACE GRÁFICA
 * MAIS ABAIXO DUAS FÁBRICAS SÃO UTILIZADAS PARA EXEMPLIFICAR O USO
 */

function main(\AbstractFactory\Interfaces\ThemeFactory $factory)
{
    $container = $factory->makeContainer();

    $button = $factory->makeButton();
    $button->setText('Clique aqui');
    $button->onPress(function () use ($button) {
        $class = explode('\\', get_class($button));
        return "alert(\"Você clicou em um {$class[count($class) - 1]}\");";
    });
    
    $container->add($button);
    
    echo $container->render();
}

// Alterne entre as duas linhas abaixo para observar o funcionamento do pattern em ação
$factory = new \AbstractFactory\Themes\Sky\SkyFactory();
// $factory = new \AbstractFactory\Themes\Fashion\FashionFactory();

main($factory);
