<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// if ($_SERVER['REQUEST_URI'] === '/') {
//     echo 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white';
// } else {
//     echo 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white';
// }

// echo $_SERVER['REQUEST_URI'] === '/' ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white';

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}