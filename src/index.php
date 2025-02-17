<?php
echo "Hello world!";

/**
 * cette fonction affiche un message de bienvenue
 * 
 * @param string $name le nom de l'utilisateur
 * @return void 
 */

function welcomeMessage($name){
    echo "Bienvenue, ". $name . "!";
}

/**
 * Affiche les éléments d'un tableau 
 * 
 * @param array $array le tableau d'éléments 
 * @return void
 */
function displayArray($array){
    foreach($array as $item){
        echo $item . "<br>";
    }
}

//test de la fonction avec un tableau 
$fruits=["pomme","banane","cerise"];
displayArray($fruits);
?>