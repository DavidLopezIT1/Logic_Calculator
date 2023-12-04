<?php 
//include "./operation.php";
        $buttons= isset($_POST["button"]) ? $_POST["button"]: null;
        $operator= isset($_POST["Operator"]) ? $_POST["Operator"]: null;
        $Screen= isset($_POST["Screen_Result"]) ? $_POST["Screen_Result"]: null;
        $buttons2= isset($_POST["buttons2"]) ? $_POST["buttons2"]: null;
        $operator2= isset($_POST["operator2"]) ? $_POST["operator2"]: null;

        if($operator != null){
            if($operator =="="){
                switch ($operator2) {
                    case '+':
                        $Screen = ($buttons2 + $Screen);
                        break;
                            case '-':
                                $Screen = ($buttons2 - $Screen);
                                    break;
                                     case '*':
                                           $Screen = ($buttons2 * $Screen);
                                               break;
                                                    case '/':
                                                       $Screen = ($buttons2 / $Screen);
                                                          break;
                }
            }
            else{ 
                $operator2 = $operator;
                $buttons2 = $Screen;
                $Screen= null;
            }   
        }
        else{
            $Screen = $Screen.$buttons;
        }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logic Calculator</title>

</head>
<body>
<main>

    <form action="index.php" method="post">
        <div class="Container" name="Container">
            <input class="Screen_Result" type="text" name="Screen_Result" value="<?php echo $Screen; ?>" >   

       <div class="Submit_Butt_Top">
        <button class="Submit_Butt_Topi" type="submit" name="Operator" value= "borrar">C</button>
        <button class="Submit_Butt_Topi" type="submit" name="Operator" value="/">/</button>
        <button class="Submit_Butt_Topi" type="submit" name="Operator" value="&larr;">&larr;</button>
       </div>

       <div class="Submit_Butt" >
        <button type="submit" name="button" value="7">7</button>
        <button type="submit" name="button" value="8">8</button>
        <button type="submit" name="button" value="9">9</button>
        <button class="Submit_Butt_Der" type="submit" name="Operator" value="*">*</button>
       </div>

       <div class="Submit_Butt" >
        <button type="submit" name="button" value="4">4</button>
        <button type="submit" name="button" value="5">5</button>
        <button type="submit" name="button" value="6">6</button>
        <button class="Submit_Butt_Der" type="submit" name="Operator" value="+">+</button>
       </div>

       <div class="Submit_Butt" >
        <button type="submit" name="button" value="1">1</button>
        <button type="submit" name="button" value="2">2</button>
        <button type="submit" name="button" value="3">3</button>
        <button class="Submit_Butt_Der" type="submit" name="Operator" value="-">-</button>
       </div>

       <div class="Submit_Butt_Bot" >
        <button class="Submit_Butt_Boti" type="submit" name="button" value="0">0</button>
        <button class="Submit_Butt_Boti" type="submit" name="button" value=".">.</button>
        <button class="Submit_Butt_Boti" type="submit" name="Operator" value= "="> = </button>
       </div>
    </div>
            <div>
                <input type="hidden" name="buttons2" value="<?php echo $buttons2;?>">
                <input type="hidden" name="operator2" value="<?php echo $operator2;?>">
            </div>
     </form>
   
</main>

</body>
</html>