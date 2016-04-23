<?php

$correctMethod = "POST";
$correctSecret = "KEBZmd8D2HujpQ";

if ($method == $correctMethod && $secret == $correctSecret) {
  // update website
}

echo exec('git pull origin master');