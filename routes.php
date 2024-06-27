<?php

use Mvc\Controllers\addAdminUserController;

return [
	'GET|/' => Mvc\Controllers\HomeController::class,

	'GET|/aulas' => Mvc\Controllers\AulasController::class,
	'GET|/aulas/' => Mvc\Controllers\AulasController::class,

	'GET|/login' => Mvc\Controllers\LoginController::class,
	'GET|/login/' => Mvc\Controllers\LoginController::class,

	'GET|/sacramental' => Mvc\Controllers\SacramentalController::class,
	'GET|/sacramental/' => Mvc\Controllers\SacramentalController::class,

	'GET|/transmissao/' => Mvc\Controllers\TransmissaoController::class,
	'GET|/transmissao/' => Mvc\Controllers\TransmissaoController::class,

	'GET|/ata-sacramental/' => Mvc\Controllers\AtaSacramentalController::class,
	// 'GET|/ata-sacramental/baixar' => Mvc\Controllers\BaixarAtaSacramentalController::class,

	'GET|/admin/aulas/' => Mvc\Controllers\AdminAulasController::class,
	'GET|/admin/aulas' => Mvc\Controllers\AdminAulasController::class,

	'GET|/admin/aulas/atualizar/' => Mvc\Controllers\FormAulasController::class,
	'GET|/admin/aulas/atualizar' => Mvc\Controllers\FormAulasController::class,

	'GET|/admin/aulas/adicionar/' => Mvc\Controllers\FormAulasController::class,
	'GET|/admin/aulas/adicionar' => Mvc\Controllers\FormAulasController::class,

	'GET|/admin/frequencia' => Mvc\Controllers\AdminFrequenciaController::class,
	'GET|/admin/frequencia/' => Mvc\Controllers\AdminFrequenciaController::class,

	'GET|/admin/cadastro' => Mvc\Controllers\AdminCadastroController::class,
	'GET|/admin/cadastro/' => Mvc\Controllers\AdminCadastroController::class,

	'GET|/admin/sacramental' => Mvc\Controllers\AdminSacramentalController::class,
	'GET|/admin/sacramental/' => Mvc\Controllers\AdminSacramentalController::class,

	'GET|/admin/painel' => Mvc\Controllers\AdminPainelController::class,
	'GET|/admin/painel/' => Mvc\Controllers\AdminPainelController::class,
	'GET|/admin/' => Mvc\Controllers\AdminPainelController::class,
	'GET|/admin' => Mvc\Controllers\AdminPainelController::class,
	
	'POST|/registerMemberInSacramentalMeeting/' => Mvc\Controllers\registerMemberInSacramentalMeeting::class,

	'POST|/addClass/' => Mvc\Controllers\RegisterAdminAulasController::class,
	'POST|/excludeClassMeeting/' => Mvc\Controllers\DeleteAdminAulasController::class,
	'POST|/updateClassMeeting/' => Mvc\Controllers\UpdateAdminAulasController::class,

	'POST|/addLinkSacramental/' => Mvc\Controllers\UpdateAdminSacramentalController::class,

	'POST|/addAdminUser/' => Mvc\Controllers\addAdminUserController::class,

	'POST|/GenerateAtaSacramental/' => Mvc\Controllers\GenerateAtaSacramentalController::class

];
