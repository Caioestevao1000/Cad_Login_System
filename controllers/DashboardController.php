<?php

class DashboardController {

    //inicia um sessão para verificar se o usuário está autenticado
    public function index(){
        // inicia um sessão para verificar se o usuário está autenticado 
        session_start();
        // verifica se a variável da sessão 'usuario_id' está definida
        //se não estuver, significa que o usuario bão está autenticado
        if(!isset($_SESSION['usuario_id'])){
            header(('Location: index.php'));
            exit;//garante qyee o script seja interrompido após o redirecionamento
        }
        // Se o usuário estiver autenticado, srá incluída a View 'dashboard.php' que exibe ao painel de controle da aplicação 
        include 'views/dashboard.php';
    }
    

}

?>