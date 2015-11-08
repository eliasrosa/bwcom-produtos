<?php

namespace BW\Com\Produtos\Controllers;

use BW\Core\Controller;



class Produtos extends Controller
{
	protected $namespace = 'BW\Com\Produtos';


	//
    public function index(){

    	//
    	$com = $this->getComponente();
    	$config = $com->getConfig();

    	//
    	$this->setTitle('ok');

    	//
    	$this->setContent('produtos.lista')
			->with('teste', 'sdasd');

		dump($config);

    	//
    	return $this->getLayout();
    }
}
