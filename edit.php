<?php

        if(!empty($_GET['id']))
        {

            include_once('conexao.php');

                $id = $_GET['id'];

                $sqlSelect = "SELECT *  FROM agenda WHERE id=$id";

                $result  = $conexao ->query($sqlSelect);

                if($result->num_rows > 0)
                {
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        $nome  =  $user_data [ 'nome'];
                        $email = $user_data [ 'email'];
                        $telefone = $user_data [  'telefone'];
                        $horario =  $user_data ['horario'];
                        $data_agend =$user_data ['data_agend'];
                        $services =$user_data ['services'];
                        $barbeiro = $user_data [ 'barbeiro'];

                    }              
                }
                else
                {
                        header('location: agenda.php');
                }    
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
#update{
    background-image: linear-gradient( to right, rgb(7, 248, 79), rgb(1, 146, 27) );
    width: 100%;
    width: 100%;
    border: none;
    padding: 15px;
    color:  white;
    font-size: 15px;
    cursor:  pointer;
    border-radius: 10px;
}
#update:hover{
    background-image: linear-gradient( to right, rgb(0, 221, 66), rgb(6, 19, 8) ) ;
}


    </style>

</head>
<body>
    <div class="box">
            <form action="save_edit.php" method="POST">
                <fieldset>
                <legend><b>Agendamento</b></legend> <br>

                <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required >
                        <label for="nome" class="labelInput">Nome completo:</label>
                </div><br><br>

                <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?> " required >
                        <label for="email" class="labelInput">Email:</label>
                </div><br><br>

                <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser"  value="<?php echo $telefone ?>" required >
                        <label for="telefone" class="labelInput">Telefone:</label>
                </div><br<br><br>

                        <label for="horario"><b>horário:</b></label>
                        <input type="time" name="horario" id="horario"  value="<?php echo $horario ?>" required >
                <br><br><br>   

                        <label for="data_agendamento"><b>Data:</b></label>
                        <input type="date" name="data_agend" id="data_agend"   value="<?php echo $data_agend ?>"required >
                <br><br><br>

                <label for="services">Serviços:</label>
                <select name="services" id="services">
                    <option value="cabelo" >Cabelo -  R$ 25 </option>
                    <option value="barba" >Barba - R$ 25</option>
                    <option value="cabelo/barba" >Cabelo/Barba - R$ 50 </option>
                </select> <br><br><br>


                <p>Barbeiros:</p>
                <input type="radio" id="will" name="barbeiro" value="will" required>
                <label for="will">Will</label><br>
                <input type="radio" id="lucas" name="barbeiro" value="lucas"  required>
                <label for="lucas">Lucas</label><br>
                <input type="radio" id="francis" name="barbeiro" value="francis" required>
                <label for="barbeiro">Francis</label><br><br><br>

                <input type="hidden" name="id" value= "<?php echo $id ?>">
                <input type="submit" name="update" id="update">   

                <div class="bot">
                    <h3>Barbeiro</h3><br>
                    <a href="registro.php"> Login </a>
                </div>
               
            </fieldset>
        </form>
    </div> 
</body>

</html>