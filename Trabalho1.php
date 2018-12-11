
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="Trabalho1.php" method="POST"> 
        <table border="1" width="25%"  height="25%" align="center">
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white"> Digite seu nome: </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="nome" size="10"> </td>
    </tr>
     <tr>
         <td bgcolor="#CD5C5C" align="center"><font face="Arial" color="white">  Digite o salário:  </font></td>
         <td bgcolor="#FFA07A" align="center"> <input type="text" name="salario" size="3">  </td>
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
         echo"<center>Por favor, coloque o nome";
     }
     else
     {
      if(empty($_POST['salario']))
      {
       echo"<center>Por favor,coloque o salário";   
      }
      else
      {
       $nome = $_POST['nome']; 
       $salario = $_POST['salario'];
       
       if($salario > 200 && $salario <= 1000)
       {
         echo"<center>O(A) $nome pertence a classe C";  
       }
       else if($salario>1000 && $salario<=5000)
       {
        echo"<center>O(A) $nome pertence a classe B";     
       }
       else if($salario>5000)
       {
           echo"<center>O(A) $nome pertence a classe A";  
       }
       else
       {
           echo"<center>O(A) $nome não está em nenhuma classe";

       }
      }
     }
     
 }
        
        ?>
         </form></body>
</html>
