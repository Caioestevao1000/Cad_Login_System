<?php
require_once 'models/database.php';

class User {
    //Função para encontrar um usuário pelo email, função publica
    public static function findByEmail($email){
        //obter conexão com BD
        $conn = Database::getConnection();//conexão com o BD

        $stmt = $conn->pepare("SELECT * FROM usuarios WHERE email = :email");

        $stmt->execute(['email' => $email]);

        //Retorno de dados do usuário encontrado um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);  

    }

    //Cria função que localiza usuário pelo ID
    public static function find($id){

        //Obtem a conexão com o BD
        $conn =  Database::getConnection();
        
        //Prepara 
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");

        //Executa
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Função para criar o usuário na BD
    public static function create($data){
        $conn = Database::getConnection();

        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");

        $stmt->execute($data);
    } 
}

?>  