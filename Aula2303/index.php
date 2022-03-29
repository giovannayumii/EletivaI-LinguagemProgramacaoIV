<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Aula 23/03</title>
  </head>
  <body>
    <h1>Aula 23/03 FUNÇÕES</h1>

    <?= date ("d/m/y") ?> 
    <br/>

    <?= date ("h:i") ?>
    <br/>
    <?= date ("h:i:s") ?>
    <br/>

    <?php
        $valor = 10004.789;
        echo "R$".(number_format($valor,1,',','.'));
    ?>
    <br/>

    <?php
        function formatarNumero($numero)
        {
            echo "R$".(number_format($numero,1,',','.'));
        }

        function retornarNumero($numero)
        {
            return "R$".(number_format($numero,1,',','.'));
        }

        echo "FUNÇÃO Formatar número";
        echo "<br/>";

        formatarNumero(10003.731);
        echo "<br/>";
        formatarNumero(8953.93771);

        echo "<br/>";

        echo "FUNÇÃO Retornar número";
        echo "<br/>";

        echo retornarnumero(200.777);
        $numero = retornarNumero(150.66);
        echo "<br/>";
        echo $numero;

    ?>



   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>