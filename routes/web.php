<?php

//Routing For Views

//Main Route Also Called Index Route
Auth::routes();

Route::get('/', 'Main@index');

//Normal Pages Routes
Route::get('/about-us','Main@aboutus')->name('aboutus');
Route::get('/contact-us','Main@contactus')->name('contactus');
Route::get('/home-page','Main@homepage')->name('homepage');
Route::get('/how-we-work','Main@howwework')->name('howwework');
Route::post('/index','Main@index')->name('index');
Route::post('/our-projects','Main@ourprojects')->name('ourprojects');
Route::post('/our-services','Main@ourservices')->name('ourservices');
Route::post('/project-search-result','Main@projectsearchresult')->name('projectsearchresult');
Route::post('/quote','Main@quote')->name('quote');


//Admin Panel Pages Routing


