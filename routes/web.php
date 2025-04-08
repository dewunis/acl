<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service/{id}', function ($id) {
    return view("service.$id");
})->where('id', '[0-9]+');

Route::get('/service', function () {
    return view('service.index');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/reference', function () {
    return view('reference');
});

Route::get('/actus', function () {
    return view('actus');
});

Route::get('/actus1', function () {
    return view('actus1');
});

Route::get('/offer', function () {
    return view('offer');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});
