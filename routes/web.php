<?php

use Illuminate\Support\Facades\Auth;

Auth::routes();

$this->get('/home', 'HomeController@index')->name('home');
$this->get('/', 'HomeController@index')->name('home');
