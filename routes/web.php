<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


Route::get('/str-uuid', function () {
    $uuid = Str::uuid();
    echo $uuid."<br>";
    $order1 = Str::orderedUuid();
    echo $order1."<br>";

    $order2 = Str::orderedUuid();
    echo $order2."<br>";
});

Route::get('/', function () {
    $uuid = Uuid::generate()->string;
    echo $uuid;
});
