<?php

class UserController {
    public function register (){
        //verifica se a requisição HTTP é do tipo POST (se o fomulário for enviado)
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ //esse [] pega as informações do banco em tempo real
            //Coleta os dados enviados pelo formulário e organiza em um array
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // criptografa a senha
                'perfil' => $_POST ['perfil']];
                
                //Chama o método create do model User para ciar o novo usuário no DB
                User::create($data);
                header('Loacation: index.php');

        } else{
            include 'views/register.php';
        }
    }

    //Função para listar todos os Usuários
    public function list(){// funcção que cria a variaveul users
        $users = User::all();//aqui traz as informações do SELECT lá
        include 'views/list_users.php';
    }
}

?>