<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="" class="id">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="joãozinho" required>
        
            <label for="" class="id">Email</label>
            <input type="email" name="email" id="email" placeholder="exemplo@exemplo.com" required>
        
            <label for="" class="id">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="&x3MpL0@@D3@@S3nHa@@S3gu9a!" required>
        
            <label for="" >Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Voltar ao Login</a>
    </div>

</body>
</html>