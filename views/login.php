<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="index.php?action=login" method="post">
            
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="exemplo@exemplo.com" required>
            
            
            
                <label for="password">Senha</label>
                <input type="password" name="senha" placeholder="&x3MpL0@@D3@@S3nHa@@S3gu9a!" required>
            

            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastra-se</a>
    </main>
</body>
</html>