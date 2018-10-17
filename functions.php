<?php

/**
 * Return random quote from array
 *
 * @return string
 */
function getRandomQuote():string
{
    $quotes = [
        "Joey: How you doin?",
        "Chandler: I can handle this. \"Handle\" is my middle name. Actually, \"handle\" is the middle of my first name.",
        "Ross: I grew up in a house with Monica, okay. If you didn\'t eat fast, you didn\'t eat.",
        "Janice: Oh... my... God!",

    ];

    $randomIndex = array_rand($quotes);
    $randomQuote = $quotes[$randomIndex];
    return $randomQuote;
}