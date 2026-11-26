<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    $contacts = [
        ['title' => 'Адрес', 'value' => 'г. Москва, ул.Шпатель, д. 322'],
        ['title' => 'Телефон', 'value' => '+7 (999) 067-67-67'],
        ['title' => 'Email', 'value' => 'info@example.com'],
        ['title' => 'Режим работы', 'value' => 'Пн-Пт, 9:00-18:00'],
    ];

    return view('contacts', ['contacts' => $contacts]);
});