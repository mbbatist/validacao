<html>
    <head>
         <meta charset="UTF-8">
       <title></title>
    </head>
    <body>
        <form action="Trabalho.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite seu nome: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="nome" size="10"> </td>
    </tr>
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">  Digite a cor da camisa:  </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="cor" size="10">  </td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="#FFA07A">  <center> <input type="submit" name="enviar"> </center></td>
      
    </tr>
       </table>
<?php
	if(isset($_POST['enviar']))
		{ 
				if(empty($_POST['nome']))
				{
				echo "<center>Por favor, coloque o nome <br>";
				}
				else 
				{  
                                    if(empty($_POST['cor']))
                                    {
                                     echo "<center>Por favor, coloque a cor da camisa<br>";   
                                    }
                                    else
                                        {
                                    
					if(!empty($_POST['cor']))
						  {
							$nome = $_POST['nome'];
							$cor = $_POST['cor'];
									if ($cor == verde)
									{  
									echo"<center> <font color=green> $nome tem a camisa da cor verde! </font>";
									}
									else if($cor == vermelha) 
									{  
									echo"<center><font color=red> <br> $nome tem a camisa da cor vermelha!  </font>";
									}
									else if ($cor == azul)  
									{ 
									echo"<center><font color=blue> <br> $nome tem a camisa da cor azul!  </font>";
									}							 
						                       else
						                        {
						   echo "<center>$nome não está usando uma camisa catalogada no sistema!";
                                                                        }                                         
                                                }
                                       }                                                
                              }
		}	 
             
?>
    </form>
     </body>
</html>
