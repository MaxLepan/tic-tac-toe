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
        return "O";
    } else {
        return " ";
    }
}

function isEmpty($grid, $x, $y){
    return $grid[$x][$y] == null;
}

function hasAnyEmptyCell($game) {
    for($i = 0; $i <= 3; $i++){
        for($j = 0; $j <= 3; $j++){
            if ($game[$i][$j] == null)
            return true;
        }
    }
    return false;
}

function changePlayer($player){
    if ($player == 1){
        $player = 2;
        return $player ;
    } elseif ($player == 2){
        $player = 1;
        return $player;
    }
}

play($game);