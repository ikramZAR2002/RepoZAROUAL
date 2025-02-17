<?php

/**
 * Cette fonction affiche un message de bienvenue personnalisé.
 *
 * @param string $name Le nom de l'utilisateur
 * @return void
 */
function welcomeMessage($name)
{
    echo "Bienvenue, " . $name . "!<br>";
}

/**
 * Affiche les éléments d'un tableau avec leur indice.
 *
 * @param array $array Le tableau d'éléments
 * @return void
 */
function displayArrayWithIndex($array)
{
    foreach ($array as $index => $item) {
        echo "Indice " . $index . ": " . $item . "<br>";
    }
}

/**
 * Calcule la somme des valeurs dans un tableau numérique.
 *
 * @param array $numbers Le tableau de nombres
 * @return int La somme des valeurs
 */
function sumArray($numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

/**
 * Fonction principale qui appelle toutes les autres fonctions.
 */
function main()
{
    // Déplacer l'effet de bord ici
    echo "Hello world!<br>";

    // Appel de la fonction welcomeMessage
    welcomeMessage("Ikram");

    // Test de la fonction displayArrayWithIndex avec un tableau de fruits
    $fruits = ["pomme", "banane", "cerise", "orange"];
    displayArrayWithIndex($fruits);

    // Test de la fonction sumArray avec un tableau de nombres
    $numbers = [10, 20, 30, 40];
    $total = sumArray($numbers);
    echo "La somme des nombres est : " . $total . "<br>";
}

// Exécuter la fonction principale uniquement à la fin du fichier
main();
