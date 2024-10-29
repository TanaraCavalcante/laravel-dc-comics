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

    //Conexão com a route em web.php
    public function create(){
        return view("movies.create");
    }

    //Chamada post com os resultados do form executado em "create.blade.php", que serà visualizado no store.blade.php
    public function store(Request $request){
        $movieData = $request->all();

        $newMovie = new Movie();
        $newMovie-> poster = $movieData["poster"];
        $newMovie-> original_title = $movieData["original_title"];
        $newMovie-> title = $movieData["title"];
        $newMovie-> description = $movieData["description"];
        $newMovie-> genre = $movieData["genre"];
        $newMovie-> actors = $movieData["actors"];
        $newMovie-> director = $movieData["director"];
        $newMovie-> duration_minutes = $movieData["duration_minutes"];
        $newMovie-> year = $movieData["year"];
        $newMovie-> country = $movieData["country"];
        $newMovie-> studio = $movieData["studio"];
        $newMovie-> save();

        return redirect()->route("movies.show", ["id"=> $newMovie->id]);
    }

}