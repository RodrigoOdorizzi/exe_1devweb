<!DOCTYPE html>


<?php

define("NUMEROS", 2);
define("MAXIMO", 6);
define("MINIMO", 1);
$dado_player = array();
$dado_com = array();
$imagem;
?>



<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>

</head>

<body>

    <div class="geral">
        <div class="cont">

            <?php


            function geradado()
            {


                mt_srand();




                for ($i = 0; $i < NUMEROS; $i++) {



                    $dado_player[$i] = mt_rand(MINIMO, MAXIMO);
                    $GLOBALS['imagem'] = $dado_player[0];
                }



                for ($i = 0; $i < NUMEROS; $i++) {

                    echo  $dado_player[$i] . "<br>";
                }
            }


            ?>

            <?php

            geradado();

            ?>
            <div class="img">



                <?php


                if ($imagem == 1)

                    $imagemurl = "img/dado_1.png";

                else
 
                if ($imagem == 2)

                    $imagemurl = "img/dado_2.png";

                else
 
            
                if ($imagem == 3)

                    $imagemurl = "img/dado_3.png";

                else
 
            
                if ($imagem == 4)

                    $imagemurl = "img/dado_4.png";

                else
 
            
                if ($imagem == 5)

                    $imagemurl = "img/dado_5.png";

                else
 
            
                if ($imagem == 6)

                    $imagemurl = "img/dado_6.png";




                ?>



                <img src="<?php echo $imagemurl; ?>">



            </div>



        </div>
    </div>
</body>

</html>