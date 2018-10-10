<?php

/**
 * Return random quote from array
 *
 * @return string
 */
function getRandomQuote():string
{
    $quotes[
        'Insert first quote here.'
    ];

    $randomIndex = array_rand($quotes);
    $randomQuote = $quotes[$randomIndex];
    return $randomQuote;
}