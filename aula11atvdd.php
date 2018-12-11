
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atividade da aula 11</title>
    </head>
    <body>
        <form action="aula11atvdd.php" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>Nome</td>
                    <td><input type="text" size="40" name="nome" placeholder="Insira seu nome..."</td>
                    
                </tr>
                <tr>
                    <td>Cidade</td>
                    <td>
                        <input type="checkbox" name="cidade" value="Paris">Paris
                      <br><input type="checkbox" name="cidade" value="Barcelona">Barcelona
                            <br><input type="checkbox" name="cidade" value="New York">New York
                            <br><input type="checkbox" name="cidade" value="Buenos Aires">Buenos Aires</td>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Pesquisar" name="Pesquisar"></td>
                   
                   
                </tr>
            </table>
        </form>
        <?php
      //////////////////////////////////////////////////////////////////////////
      //////////////////////////Atividade//////////////////////////////////////
      ////////////////////////////////////////////////////////////////////////
      
      //questao01:
     if(isset($_POST['Pesquisar']))
     {
         $nome=$_POST['nome'];
         $cidade=$_POST['cidade'];
        
         if($cidade=="Paris")
         {
             for($i=1;$i<151;$i++)
             {
                 echo "<font color='blue'> $i-$nome,você mora em Paris</font><br>";
         } }
              else if($cidade=="Barcelona")
         {
             for($s=1;$s<251;$s++)
             {
                 echo "<font color='green'> $s-$nome,você mora em Barcelona</font><br>";
             }
         }
         else if($cidade=="New York")
         {
             for($x=1;$x<501;$x++)
             {
                 echo "<font color='orange'> $x-$nome,você mora em Barcelona</font><br>";
             }
         }
         else
         { echo"Nenhuma cidade foi cadastrada!";}
         } ?>
    </body>
</html>
