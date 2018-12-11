
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="exercicio.php" method="POST">
            A     <input type="text" name="a" size="3"> <br>
            B    <input type="text" name="b" size="3"> <br>
          C     <input type="text" name="c" size="3"> <br>
           D     <input type="text" name="d" size="3"> <br>
            <input type="submit" name="enviar" value="enviar">
        </form>
        <?php
        if(isset($_POST['enviar']))
            {
            $a=$_POST['a'];
            $b=$_POST['b'];
            $c=$_POST['c'];
            $d=$_POST['d'];
            $soma=$a+$c;
            $mult=$b*$d;
            if($soma>$mult){
                echo"$a+$c é maior que $b*$d";
            }
            else if($soma<$mult){
                echo"$a+$c é menor que $b*$d";
            }
            else if($soma==$mult){
                echo"$a+$c é igual a $b*$d";
            }
            }
        ?>
    </body>
</html>
