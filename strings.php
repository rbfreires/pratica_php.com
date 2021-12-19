<?php

/**
 * Praticando com Strings
 */

echo "Hello Mundo!<br>Como vai você?!";
echo "<br><hr>";

//strlen()
$palavra = "Hello World!";
echo strlen($palavra);
echo "<br><hr>";


/**
 * str_word_count()
 */
$palavra2 = "Theo Cesar Vezu Freires.";
echo str_word_count($palavra2);
echo "<br><hr>";

//strrev()
$palavra = "Boa Noite!";
echo strrev($palavra);
echo "<br><hr>";

//strpos()
echo strpos($palavra2, "Vezu");
echo "<br><hr>";

//str_replace()
$a = str_replace("Hello", "Olá", "Hello World!");
$b = str_replace("World", "Mundo", "Hello World!");
echo $a . " <=> " . $b;
echo "<br><hr>";
