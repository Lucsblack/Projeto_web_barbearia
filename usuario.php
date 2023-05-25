<?php

        if(isset($_POST[ 'submit' ] ) )
        {
                // print_r('Nome Barbeiro: ' . $_POST[  'nome']);
                // print_r('<br>');
                // print_r('Telefone: ' . $_POST[  'telefone']);
                // print_r('<br>');
                // print_r('Email: ' . $_POST[  'email']);
                // print_r('<br>');
                // print_r('Data de Nascimento:' . $_POST['data_nascimento']);
                // print_r('<br>');
                // print_r('CPF:' . $_POST['cpf']);
                // print_r('<br>');
                // print_r('Senha: ' . $_POST[ 'senha']);

            include_once('conexao.php');

            $nome  =  $_POST[  'nome'];
            $telefone =  $_POST[  'telefone'];
            $email = $_POST[  'email'];
            $data_nasc = $_POST['data_nascimento'];
            $cpf = $_POST['cpf'];
            $senha = $_POST[ 'senha'];

            $result = mysqli_query($conexao, "INSERT INTO  usuario(nome,telefone,email,data_nasc,cpf,senha)
             VALUES ('$nome','$telefone','$email','$data_nasc',' $cpf','$senha' )");

             header('Location: login.php');
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_usuario.css">
  
    <title>Cadastro Barbeiro</title>
    <script>
        function mask_cpf() {
            var cpf = document.getElementById('cpf')
            if (cpf.value.length == 3 || cpf.value.length == 7) {
                cpf.value += "."
            } else if (cpf.value.length == 11) {
                cpf.value += "-"
            }
        }
    </script>
    
</head>
<body>
    <a href="login.php">Voltar</a>
    <div class="box">
        <form action="usuario.php" method="POST">
            <fieldset>
              <legend><b>Cadastro Usuário</b></legend>  <br>

               <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required >
                        <label for="nome" class="labelInput">Nome do barbeiro:</label>
              </div><br><br><br>

              <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required >
                <label for="telefone" class="labelInput">Telefone:</label>
              </div><br><br><br>

              <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required >
                <label for="email" class="labelInput">Email:</label>
              </div><br><br><br>

                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required >
             <br><br><br>

            <div class="inputBox">
                <input type="text" name="cpf" id="cpf" class="inputUser" required autocomplete="off" maxlength="14" onkeyup= "mask_cpf()">
                <label for="cpf" class="labelInput">CPF:</label>
            </div><br><br><br>

            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required  minlength="5">
                <label for="senha" class="labelInput">Crie uma senha:</label>
              </div><br><br><br>

           <input type="submit" value="cadastrar" name="submit" id="submit">     
                
            </fieldset>
        </form>
    </div>
</body>
</html>
