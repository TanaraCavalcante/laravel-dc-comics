<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view("movies.index", compact("movies"));
    }

    public function show(string $id){
        $movie = Movie::findOrFail($id);
        return view("movies.show", compact("movie"));
    }

    //Conecçao com a route em web.php
    public function create(){
        return view("movies.create");
    }
}