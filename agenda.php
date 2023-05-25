<?php

        if(isset($_POST[ 'submit' ] ) )
        {
            //     print_r('Nome Completo: ' . $_POST[  'nome']);
            //     print_r('<br>');
            //     print_r('Email: ' . $_POST[  'email']);
            //     print_r('<br>');
            //     print_r('Telefone: ' . $_POST[  'telefone']);
            //     print_r('<br>');
            //     print_r('Horário:' . $_POST['horario']);
            //     print_r('<br>');
            //     print_r('Data:' . $_POST['data_agendamento']);
            //     print_r('<br>');
            //     print_r('Serviços:' . $_POST['services']);
            //     print_r('<br>');
            //     print_r('Barbeiro: ' . $_POST[ 'barbeiro']);

            include_once('conexao.php');

            $nome  =  $_POST[  'nome'];
            $email = $_POST[  'email'];
            $telefone =  $_POST[  'telefone'];
            $horario =  $_POST['horario'];
            $data_agend = $_POST['data_agendamento'];
            $services = $_POST['services'];
            $barbeiro = $_POST[ 'barbeiro'];

            $result = mysqli_query($conexao, "INSERT INTO  agenda(nome,email,telefone,horario,data_agend,services,barbeiro)
             VALUES ('$nome','$email','$telefone','$horario', '$data_agend',' $services','$barbeiro' )");

               header('Location: valido.php');
        }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_agenda.css">
    <title>Agendamento</title>
    <style>

      .bot{
    position: absolute;
    top:  35%;
    left: 250%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0,0.6);
    padding: 30px;
    border-radius: 15px; 
}
a{
    text-decoration: none;
    color: white;
    border: 3px solid darkolivegreen;
    border-radius: 10px;
    padding: 10px;
}
a:hover{
      background-color: darkgreen;
}

    </style>

</head>
<body>
    <div class="box">
        <form action="agenda.php" method="POST">
            <fieldset>
              <legend><b>Agendamento</b></legend> <br>

              <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required >
                    <label for="nome" class="labelInput">Nome completo:</label>
              </div><br><br>

              <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required >
                    <label for="email" class="labelInput">Email:</label>
              </div><br><br>

              <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required >
                    <label for="telefone" class="labelInput">Telefone:</label>
              </div><br<br><br>

                    <label for="horario"><b>horário:</b></label>
                    <input type="time" name="horario" id="horario" required >
              <br><br><br>   

                    <label for="data_agendamento"><b>Data:</b></label>
                    <input type="date" name="data_agendamento" id="data_agendamento" required >
              <br><br><br>

              <label for="services">Serviços:</label>
              <select name="services" id="services">
                   <option value="cabelo">Cabelo -  R$ 25 </option>
                   <option value="barba">Barba - R$ 25</option>
                   <option value="cabelo/barba">Cabelo/Barba - R$ 50 </option>
               </select> <br><br><br>


               <p>Barbeiros:</p>
               <input type="radio" id="will" name="barbeiro" value="will" required>
               <label for="will">Will</label><br>
               <input type="radio" id="lucas" name="barbeiro" value="lucas" required>
               <label for="lucas">Lucas</label><br>
               <input type="radio" id="francis" name="barbeiro" value="francis" required>
               <label for="barbeiro">Francis</label><br><br><br>

              <input type="submit" name="submit" id="submit">   

                <!-- <div class="bot">
                    <h3>Barbeiro</h3><br>
                    <a href="login.php"> Login </a>
                </div> -->
              
            </fieldset>
        </form>
    </div> 
</body>

</html>