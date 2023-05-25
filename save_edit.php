<?php

        include_once('conexao.php');

        if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $nome  =  $_POST[  'nome'];
            $email = $_POST[  'email'];
            $telefone =  $_POST[  'telefone'];
            $horario =  $_POST['horario'];
            $data_agend = $_POST['data_agend'];
            $services = $_POST['services'];
            $barbeiro = $_POST[ 'barbeiro'];

            $sqlUpdate = "UPDATE  agenda SET  nome='$nome', email='$email', telefone='$telefone', horario='$horario', data_agend='$data_agend', services='$services', barbeiro='$barbeiro'
            WHERE  id='$id' ";

            $result = $conexao ->query($sqlUpdate);
        }
        header('Location: registro.php');

?>