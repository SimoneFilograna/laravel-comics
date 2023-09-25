<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ["comics" => config("comics")]);
})->name("homepage");

Route::get('/comicpage', function () {
    $data = [

        "singleComic" => [
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
            "thumb" => "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
            "price" => "$19.99",
            "series" => "Action Comics",
            "sale_date" => "2018-10-02",
            "type" => "comic book",
            "artists" => [
                "José Luis García-López",
                "Clay Mann",
                "Rafael Albuquerque",
                "Patrick Gleason",
                "Dan Jurgens",
                "Joe Shuster",
                "Neal Adams",
                "Curt Swan",
                "John Cassaday",
                "Olivier Coipel",
                "Jim Lee"
            ],
            "writers" => [
                "Brad Meltzer",
                "Tom King",
                "Scott Snyder",
                "Geoff Johns",
                "Brian Michael Bendis",
                "Paul Dini",
                "Louise Simonson",
                "Richard Donner",
                "Marv Wolfman",
                "Peter J. Tomasi",
                "Dan Jurgens",
                "Jerry Siegel",
                "Paul Levitz"
            ],
    ]
    ];
    return view('action-comics', $data);
})->name("comicpage");






