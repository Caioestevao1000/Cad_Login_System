<?php

// Incluo arquivos de cointrolador necessário oara lidar com diferentes ações
require "controllers/AuthController.php"; //Inclui o controlador de autenticação
require "controllers/UserController.php"; // Inclui o controlador de usuários
require 'controllers/Dashboardcontroller.php'; //Inclui o controlador de dashboard

// Criar instâncias dos controladores oara utilizar seus métodos
$authController = new AuthController(); //Intancia controlador de autenticação, dentro da variável
$userController = new UserController(); //Instancia controlador de usuário
$dashboardController = new DashboardController(); //Instancia controlador de dashboard

// Coleta a ação de URL, se nçao houver ação definida, usa 'login' como padrão
$action = $_GET["action"] ?? "login"; //Usa operador de coalescência nula (??) para definir 'login' ou  'action' não estiver presente

switch($action){ //construção do padrão do switch
    case 'login':
        $AuthController->login();//chama o método de login do controlador de autenticação
        break;
    case 'register': //Verificar se tem algum ação e caso não tiver continuar 
        $userController->register();
        break;
    case 'dashboard':
        $dashboardController->index();
        break;
    case 'logout':
        $authController->logout();
        break;
    default:
        $authController->login();
        break;

}

?>