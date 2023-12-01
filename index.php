<?php 
include "./forum.php";
include "./operation.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic Calculator</title>

</head>
<body>

    <header>
    <div>
        <h1>Calculadora</h1>
    </div>
    </header>

<main>

    <form action="index.php" method="get">
        <div class="Screen" name="Screen">
            <output name="Screen_Result">
            <?php 
    if(isset($Button0)){
        echo $Button0;
    }
    if(isset($Button1)){
        echo $Button1;
    }
    if(isset($Button2)){
        echo $Button2;
    }
    if(isset($Button3)){
        echo $Button3;
    }
    if(isset($Button4)){
        echo $Button4;
    }
    if(isset($Button5)){
        echo $Button5;
    }
    if(isset($Button6)){
        echo $Button6;
    }
    if(isset($Button7)){
        echo $Button7;
    }
    if(isset($Button8)){
        echo $Button8;
    }
    if(isset($Button9)){
        echo $Button9;
    }
    if(isset($ButtonDelete)){
        echo $ButtonDelete;
    }
    if(isset($ButtonDiv)){
        echo $ButtonDiv;
    }
    if(isset($ButtonX)){
        echo $ButtonX;
    }
    if(isset($ButtonMas)){
        echo $ButtonMas;
    }
    if(isset($ButtonMenos)){
        echo $ButtonMenos;
    }
    if(isset($ButtonPunto)){
        echo $ButtonPunto;
    }
    if(isset($ResultResult)){
        echo $ResultResult;
    }
    if(isset($ScreenResult)){
        echo $ScreenResult;
    }
    
    ?>

            </output>
        </div>

       <div>
        <button name="button_C">C</button>
        <button name="button_/">/</button>
        <button name="button_Delete">&larr;</button>
       </div>

       <div>
        <button name="button_7">7</button>
        <button name="button_8">8</button>
        <button name="button_9">9</button>
        <button name="button_X">*</button>
       </div>

       <div>
        <button name="button_4">4</button>
        <button name="button_5">5</button>
        <button name="button_6">6</button>
        <button name="button_mas">+</button>
       </div>

       <div>
        <button name="button_1" value="1">1</button>
        <button name="button_2" value="2">2</button>
        <button name="button_3" value="3">3</button>
        <button name="button_menos">-</button>
       </div>

       <div>
        <button name="button_0">0</button>
        <button name="button_punto">.</button>
        <!-- <button name="button_3">3</button> -->
        <button name="button_Result">&equals;</button>
       </div>

    </form>
   
</main>

    <footer></footer>
    
</body>
</html>