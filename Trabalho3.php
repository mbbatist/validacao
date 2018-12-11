
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Trabalho3.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite o produto: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="produto" size="10"> </td>
    </tr>
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">  Digite o valor do produto:  </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="valor_do_prod" size="3">  </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar" value="Enviar"> </center></td>
      
    </tr>
       </table>
        <?php
        if(isset($_POST['enviar']))
       {
           if(empty($_POST['produto']))
           {
            echo"<center>Por favor,coloque o nome do produto";
           }
              else
              {
                 if(empty($_POST['valor_do_prod']))
                 {
                    echo"<center>Por favor,coloque o valor do produto";   
                 }
                    else
                    {
                       $produto = $_POST['produto']; 
                       $valor_do_prod = $_POST['valor_do_prod'];
                       
                       if($valor_do_prod>0 && $valor_do_prod<31)
                       {
                           $valor_do_prod*=4;
                           echo"<center><font color=green>O $produto tem o valor de $valor_do_prod</font>";
                       }
                       else if($valor_do_prod>30 && $valor_do_prod<61)
                       {
                         $valor_do_prod/=2;
                         echo"<center><font color=red>O $produto tem o valor de $valor_do_prod</font>";
                       }
                       else if($valor_do_prod>60 && $valor_do_prod<301)
                       {
                           $valor_do_prod+=100;
                           echo"<center><font color=blue>O $produto tem o valor de $valor_do_prod</font>";
                       }
                       else
                       {
                           --$valor_do_prod;
                           echo"<center>O $produto tem o valor de $valor_do_prod";
                       }
                    }
                          }                   
        }
        ?>
        </form></body>
</html>
