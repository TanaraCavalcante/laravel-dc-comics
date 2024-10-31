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

    //Chamada post com os resultados do form executado em "create.blade.php", que serà visualizado no show.blade.php.
    public function store(Request $request){
        // Validaçao dos dados fornecidos pelo utente
        $movieData = $request->validate([
            "poster" => "required|url", //controlla se è uma url
            "original_title" => "required|string|min:4|max:255", //uma stringa con min 4 caracter max 255, pois no db è un VARCHAR(255)
            "title" => "required|string|min:4|max:255",
        ]);

        // dados da store
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

    //As duas funçoes a seguir sao para realizar o EDIT...

    public function edit(string $id){
        $movie = Movie::findOrfail($id);
        return view("movies.edit", compact("movie"));
    }

    //essa funçao è necessaria pois realiza o update in storage
    public function update(Request $request, string $id){
        $formData = $request->all();
        $movie = Movie::findOrFail($id);
        $movie-> poster = $formData["poster"];
        $movie-> original_title = $formData["original_title"];
        $movie-> title = $formData["title"];
        $movie-> description = $formData["description"];
        $movie-> genre = $formData["genre"];
        $movie-> actors = $formData["actors"];
        $movie-> director = $formData["director"];
        $movie-> duration_minutes = $formData["duration_minutes"];
        $movie-> year = $formData["year"];
        $movie-> country = $formData["country"];
        $movie-> studio = $formData["studio"];
        $movie-> update();
        // lembrar de fazer o return para o show, assim quando mandar os dados ao db retornarà na pagina.
        return redirect()->route("movies.show", ["id"=> $movie->id]);
    }

    public function destroy(string $id){
        $movie = Movie::findOrFail($id); //Caso nao funciona emite um erro
        $movie -> delete();

        return redirect()-> route("movies.index"); //redireciono a pagina inicial quando a aòao for executada.
    }

}