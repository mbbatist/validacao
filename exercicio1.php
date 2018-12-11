
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <form action="exercicio1.php" method="POST">
           Valor    <input type="text" name="fat" size="3"> <br>
            <input type="submit" name="enviar" value="enviar">
        </form>
        <?php
        if(isset($_POST['enviar'])){
        $fat=$_POST['fat'];
        $resul=1;
        for($i=$fat;$i>1;$i--){
            $resul*=$fat;
            $fat--;
        }
        echo"<br><br>$resul<br><br><br>";
        }?>
    </body>
</html>
