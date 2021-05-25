<!DOCTYPE html>


<?php

define("NUMEROS", 4);
define("MAXIMO", 6);
define("MINIMO", 1);
$dado_player = array();
$dado_com = array();
$imagem = array();
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
                    $GLOBALS['imagem'][$i] = $dado_player[$i];
                }


                //mostra valores dos dados
                /* 
                for ($i = 0; $i < NUMEROS; $i++) {

                    echo  $dado_player[$i] . "<br>";
                }
   */
            }


            ?>

            <?php

            geradado();

            ?>

            <div class="img">

                <?php


        for ($i = 0; $i < NUMEROS; $i++) {
                if ($imagem[$i] == 1)

                    $imagemurl[$i] = "img/dado1.png";

                else
 
                if ($imagem[$i] == 2)

                $imagemurl[$i] = "img/dado2.png";

                else
 
            
                if ($imagem[$i] == 3)

                $imagemurl[$i] = "img/dado3.png";

                else
 
            
                if ($imagem[$i] == 4)

                $imagemurl[$i] = "img/dado4.png";

                else
 
            
                if ($imagem[$i] == 5)

                $imagemurl[$i] = "img/dado5.png";

                else
 
            
                if ($imagem[$i] == 6)

                   $imagemurl[$i] = "img/dado6.png";

        }
                ?>

            <div class="part">
            <div class="title">
          
            <p>
            Jogador:
                </p>
            </div>
                 <div class="dad">
              <img src="<?php echo $imagemurl[0]; ?>">
              </div>  
                <div class="dad" style="margin-left: 5px;"> 
                    <img src="<?php echo $imagemurl[1]; ?>">
              </div>

              <div class="soma">

<?php 
$resultado = soma($imagem[0], $imagem[1]);

echo $resultado;
?>

</div>

            </div>
          

            <div class="part" style="margin-left: 10px;">

              <div class="title">
          
                  <p>
                      Computador:
                  </p>
              </div>
               <div class="dad">
                     <img src="<?php echo $imagemurl[2]; ?>">
               </div>  
              <div class="dad" style="margin-left: 5px;"> 
                  <img src="<?php echo $imagemurl[3]; ?>">
              </div>
           
            <div class="soma">

            <?php 
            $resultado = soma($imagem[2], $imagem[3]);

            echo $resultado;
            ?>

            </div>

<?php

function soma($n1,$n2){

return $n1 +$n2;

}

?>


           </div>


           </div>
       
           </div> 
           </div>
</body>

</html>