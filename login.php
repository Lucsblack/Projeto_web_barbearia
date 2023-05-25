<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_login.css">
    <title>Tela de Login</title>
</head>
<body>
    <a href="agenda.php"> Voltar</a>
              <div class="box">
             <fieldset>
             <legend><b>Login Barbeiro</b></legend><br>

    <form  action= "test_login.php" method="POST">
               <input type="text"  name="email" placeholder="Usuário" > <br><br><br>
              <input type="password" name="senha" placeholder="Senha" required> <br><br><br>
              <input id="submit" type="submit" name="submit" value="Entrar">
    </form>
    <p>Não possui acesso? <br><a href="usuario.php">Criar Conta</a></p>          


       
    </fieldset>
    </div>
</body>
</html>