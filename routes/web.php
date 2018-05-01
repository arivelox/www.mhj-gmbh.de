<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Blog/{slug}.html', function($slug){
    return redirect("/heimwerkerblog/$slug", 301);
});

Route::get('/Blog/{slug}', function($slug){
    return redirect("/heimwerkerblog/$slug", 301);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/impressum', function () {
    return view('impressum');
});

Route::get('/gallerie', function () {
    return view('gallerie');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/marken', function () {
    return view('marken');
});

Route::get('/leistungen', function () {
    return view('leistungen.leistungen');
});

Route::get('/leistungen/sanitaer', function () {
    return view('leistungen.sanitaer');
});

Route::get('/leistungen/elektro', function () {
    return view('leistungen.elektro');
});

Route::get('/leistungen/heizung', function () {
    return view('leistungen.heizung');
});

Route::get('/leistungen/solar', function () {
    return view('leistungen.solar');
});

Route::get('/heimwerkerblog', function () {
    return view('heimwerkerblog.heimwerkerblog');
});

Route::get('/heimwerkerblog/beruehrungslose-armaturen', function () {
    return view('heimwerkerblog.beruehrungslose-armaturen');
});

Route::get('/heimwerkerblog/fugenlose-dusche', function () {
    return view('heimwerkerblog.fugenlose-dusche');
});

Route::get('/heimwerkerblog/grohe-footcontrol-beruehrungslose-kuechenarmaturen', function () {
    return view('heimwerkerblog.grohe-footcontrol-beruehrungslose-kuechenarmaturen');
});

Route::get('/heimwerkerblog/photovoltaik-oder-solarthermie', function () {
    return view('heimwerkerblog.photovoltaik-oder-solarthermie');
});


