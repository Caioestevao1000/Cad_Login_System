<?php

// Define classe database responsável por gerenciar a cone como o DB
class Database {
    //padrão Singleton, cujo o objetivo é garantir que apenas uma única instância de classe seja criada durante a execução do programa, e que essa instância seja reutilzada sempre que necessário
    private static $instance = null;

    public static function getConnection(){//configuração de conexão como o DB
        if(!self::$instance){
            $host = "localhost";
            $db = "sistemas_usuario";
            $user = "root";
            $passaword = "";

            // Conexão usa o drive Mysql (mysql:) e as informações de host e DB
            self::$instance = new PDO("mysql:$host; dbname=$db", $user, $passaword);//PDO função do php, para conexão com mysql

            //Define modulo de erro para exceções facilitando a depuração e tratamento do erro
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    } 
}

?>