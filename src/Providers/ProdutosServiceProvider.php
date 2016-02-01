<?php

namespace BW\Com\Produtos\Providers;


use File;
use Illuminate\Routing\Router;
use BW\Core\Componentes\Componente;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class ProdutosServiceProvider extends ServiceProvider
{

    //
    private $componente = '';


    //
    public function register()
    {
        $this->componente = new Componente('produtos',  __DIR__ . '/..');
    }


    //
    public function map(Router $router) 
    {
    //     //
    //     $this->componente->setMap($router);
    } 

}
