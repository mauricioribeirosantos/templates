<?php

	require_once("vendor/autoload.php");

	// namespace que será usado para buscar arquivos
	use Rain\Tpl;

	// include
	//require "library/Rain/autoload.php";
	
	
	// config
	//aqui configuramos os arquivos que serão usados
	$config = array(
	    "tpl_dir"       => "tpl",  //caminho da pasta de template, a pasta TPL que criamos
	    "cache_dir"     => "cache/"  //caminho da pasta cache que criamos, aqui é feito o merge
	);

	//aqui é onde se passa as configurações
	Tpl::configure( $config );

	// Add PathReplace plugin (necessary to load the CSS with path replace)
	//aqui temos os caminhos de plugins utilizados, path replace é onde se refaz os caminhos
	//neste projeto não iremos utilizar
	//Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
	
	// criação do objeto da classe Tpl que está no namespace Rain que é chamada no inicio com o use
	//namespace funciona como uma pasta que abrange todos os arquivos que estão dentro, exceto pastas
	$tpl = new Tpl;
	

	// aqui fazemos o uso de variáveis, criamos 2, uma nome e outra que mostre a versão do php
	$tpl->assign( "name", "Obi Wan Kenoby" );
	$tpl->assign( "version", PHP_VERSION );
	
	// assign an array
	//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
	
	// aqui chamamos a template criada, informando o nome do arquivo que queremos, por padrão busca arquivos
	//com extensão .html, a não ser que mude nas configurações
	//como a extensão do nosso index é .html não precisamos informar a extensão, apenaas o index 
	//obs: comando draw deve ser informado por ultimo, pois significa que tudo que é preciso já foi passado
	//portanto deve ser o ultimo método da parte de template a ser usado
	$tpl->draw( "index" );

?>