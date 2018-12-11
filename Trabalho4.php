
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <form action="Trabalho4.php" method="POST">   
        <table border="1" align="center" width="480">
            <tr>
                <td bgcolor="#CD5C5C" width="100" height="30" colspan="2" align="center"><font face="Arial" color="white"> Cadastro de Pessoas Fisicas</font></td>
               
            </tr> 
            <tr>
                <td bgcolor="#CD5C5C" width="30" height="30" align="right"><font face="Arial" color="white">Nome</font></td>
                <td bgcolor="#FFA07A" width="200" height="30" align="center"><input type="text" name="nome" size="20" placeholder="Insira o seu nome..."></td>
            </tr>
            <tr>
                <td bgcolor="#CD5C5C" width="30" height="30" align="right"><font face="Arial" color="white">Endereço</font></td>
                 <td bgcolor="#FFA07A" width="200" height="30" align="center"><input type="text" name="endereco" size="50"></td>
            </tr>
            <tr>
                <td bgcolor="#CD5C5C" width="30" height="30" align="right"><font face="Arial" color="white">Idade</font></td>
                <td bgcolor="#FFA07A" width="200" height="30" align="center" ><input type="text" name="idade" size="2" maxlength="3"></td>
            </tr>
             <tr>
                 <td bgcolor="#CD5C5C" width="30" height="30" align="right"><font face="Arial" color="white">CPF</font></td>
                <td bgcolor="#FFA07A" width="200" height="30" align="center" ><input type="text" name="cpf" size="15" maxlength="11"></td>
            </tr>  
            <tr>
                <td bgcolor="#CD5C5C" width="30" height="30" align="right"><font face="Arial" color="white">Sexo</font></td>
                <td bgcolor="#FFA07A" width="200" height="30" align="center" >
                    <font face="Arial" color="white">
                    <input type="radio" name="sexo" value="Masculino">Masculino
                    <br>
                    <input type="radio" name="sexo" value="Feminino">Feminino</font>
                </td>
            </tr>  
            <tr>
                <td bgcolor="#CD5C5C" width="100" height="30" align="right"><font face="Arial" color="white">Cidade</font></td>
                <td bgcolor="#FFA07A" width="200" height="30" align="center" ><font face="Arial"><select name="cidade">
                        <option value="">::Escolha a Cidade::</option>
                        <option value="Araguaína">Araguaína</option>
                        <option value="Palmas">Palmas</option>
                        <option value="Porto Nacional">Porto Nacional</option>
                    </select></font></td>
            </tr>  
            <tr>
                <td bgcolor="#CD5C5C" width="30" height="30" align="right"><font face="Arial" color="white">Observações</font></td>
                <td bgcolor="#FFA07A" width="200"  height="30" align="center"><textarea name="observacoes" cols="30" rows="3" placeholder="Escreva aqui... ou não"></textarea></td>
            </tr>  
            <tr>
                <td bgcolor="#FFA07A" width="30" height="30" colspan="2" align="center" >
                    <input type="submit" value="enviar" name="enviar">
                    <input type="reset" value="apagar" name="apagar">
                </td>
              </tr> 
            </table>
        <?php
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $idade = $_POST['idade'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $cidade = $_POST['cidade'];
        $observacoes = $_POST['observacoes'];
        if(isset($_POST['enviar']))
        {
            if(empty($_POST['nome']))
            {
                echo"<center><h4><font color=red>*</font>TODOS OS CAMPOS SÃO OBRIGATÓRIOS!!!</h4>";
            }
            else
            {
                if(empty($_POST['endereco']))
                {
                    echo"<center><h4><font color=red>*</font>TODOS OS CAMPOS SÃO OBRIGATÓRIOS!!!</h4>";
                }
                else
                {
                    if(empty($_POST['idade']))
            {
                echo"<center><h4><font color=red>*</font>TODOS OS CAMPOS SÃO OBRIGATÓRIOS!!!</h4>";
            }
            else
            {
                if(empty($_POST['cpf']))
                {
                    echo"<center><h4><font color=red>*</font>TODOS OS CAMPOS SÃO OBRIGATÓRIOS!!!</h4>";
                }
                else
                    if(empty($_POST['sexo']))
            {
                echo"<center><h4><font color=red>*</font>TODOS OS CAMPOS SÃO OBRIGATÓRIOS!!!</h4>";
            }
            else
            {
                if(empty($_POST['cidade']))
                {
                    echo"<center><h4><font color=red>*</font>TODOS OS CAMPOS SÃO OBRIGATÓRIOS!!!</h4>";
                }
                else 
                {
                    
                if(empty($_POST['observacoes']))
                {
                    echo"<center><h4><font color=red>*</font>TODOS OS CAMPOS SÃO OBRIGATÓRIOS!!!</h4>";
                }
                else
                {
                    echo"<center><font color=red>Dados Informados</font>";
                    echo"<center>Nome: $nome";
                    echo"<center>Endereço: $endereco";
                    echo"<center>Idade: $idade";
                    echo"<center>CPF: $cpf";
                    echo"<center>Sexo: $sexo";
                    echo"<center>Cidade: $cidade";
                    echo"<center>Observações: $observacoes";
                }
                }
                    
                }
                }
            }
            }
        }
            
        ?>
    </form></body>
</html>
