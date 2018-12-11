
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="exercicio.php" method="POST">
            Anos de fumante     <input type="text" name="anos_fumante" size="3"> <br>
            cigarros fumados por dia    <input type="text" name="fumados_por_dia" size="3"> <br>
          Preço da Carteira    <input type="text" name="preço" size="3"> <br>
           D     <input type="text" name="d" size="3"> <br>
            <input type="submit" name="enviar" value="enviar">
        </form>
        <?php
        if(isset($_POST['enviar']))
       
      
        ?>
    </body>
</html>
