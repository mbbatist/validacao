
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Trabalho2.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite seu nome: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="nome" size="10"> </td>
    </tr>
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">  Digite o número:  </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="numero" size="3">  </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar" value="Enviar"> </center></td>
      
    </tr>
       </table>
        <?php
       if(isset($_POST['enviar']))
       {
           if(empty($_POST['nome']))
           {
            echo"<center>Por favor,coloque o nome";
           }
              else
              {
                 if(empty($_POST['numero']))
                 {
                    echo"<center>Por favor,coloque o numero";   
                 }
                    else
                    {
                       $nome = $_POST['nome']; 
                       $numero = $_POST['numero'];
       
                       if($numero>=1 && $numero<=5)
                       {
                          $numero*=5;
                          echo"<center>O(A)$nome tem o número igual a $numero";
                       }
                           else if($numero==6)
                           {
                              $numero/=2;
                              echo"<center>O(A)$nome tem o número igual a $numero";
                           }
                              else if($numero>6 && $numero<=10)
                              {
                                 $numero+=20;        
                                 echo"<center>O(A)$nome tem o número igual a $numero";
                              }
                                 else
                                 {
                                    --$numero;
                                    echo"<center>$nome não digitou um numero cadastrado, ficando com o valor $numero";
                                  }
                    }
             }
       }
        ?>
        </form></body>
</html>
