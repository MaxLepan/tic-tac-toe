<?php

require "functions.php";

$player = 1;

// Un tableau de 3x3 par defaut avec des valeurs de cellules a null.
$game = [];//todo instanciate me.
for($i = 0; $i <= 3; $i++){
    for($j = 0; $j <= 3; $j++){
        $game[$i][$j] = null;
    }
}

function showCharacter($cell) {
    if ($cell == 1){
        return "X";
    } elseif ($cell == 2){
        return "0";
    } else {
        return " ";
    }
}

function isEmpty($game, $row, $col){
    if ($game[$row][$col] == " "){
        return true;
    } else {
        return false;
    }
}

/*function hasAnyEmptyCell($game) {
    for($i = 0; $i <= 3; $i++){
        for($j = 0; $j <= 3; $j++){
            if($game[$i][$j] == " "){
                return true;
            } else {
                return false;
            }
        }
    }
}

function changePlayer($player){
    if ($player == 1){
        $player = 2;
        return $player ;
    } elseif ($player == 2){
        $player = 1;
        return $player;
    }
}*/

play($game);



/*function showCharacter($cell): string
{
    //return string.
}
*/
