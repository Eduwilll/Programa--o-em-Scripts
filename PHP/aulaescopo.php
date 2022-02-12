<?php

function escopo(){
    $a = "hello"; //escopo local
    global $x;
    $x = "- Globals";

}
escopo();

echo "A dentro da função" . $a;
echo "<br> dentro da funcao global" . $x;
?>