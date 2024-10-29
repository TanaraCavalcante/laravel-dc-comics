<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/f/f9/TheAvengers2012Poster.jpg',
                'original_title' => 'The Avengers',
                'title' => 'I Vendicatori',
                'description' => 'Un gruppo di eroi si unisce per salvare il mondo.',
                'genre' => 'Azione, Avventura',
                'actors' => 'Robert Downey Jr., Chris Evans, Scarlett Johansson, Mark Ruffalo, Chris Hemsworth',
                'director' => 'Joss Whedon',
                'duration_minutes' => 143,
                'year' => 2012,
                'country' => 'Stati Uniti',
                'studio' => 'Marvel Studios'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/3/3f/Spider-Man_Homecoming_poster.jpg',
                'original_title' => 'Spider-Man: Homecoming',
                'title' => 'Spider-Man: Ritorno a Casa',
                'description' => 'Un giovane Peter Parker cerca di bilanciare la sua vita di studente e supereroe.',
                'genre' => 'Azione, Avventura, Fantasia',
                'actors' => 'Tom Holland, Michael Keato, Robert Downey Jr., Zendaya, Marisa Tomei',
                'director' => 'Jon Watts',
                'duration_minutes' => 133,
                'year' => 2017,
                'country' => 'Stati Uniti',
                'studio' => 'Columbia Pictures'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/8/80/Wonder_Woman_%282017_film%29.png',
                'original_title' => 'Wonder Woman',
                'title' => 'Wonder Woman',
                'description' => 'La storia di Diana, una guerriera immortale che lotta per la giustizia.',
                'genre' => 'Azione, Avventura, Fantasia',
                'actors' => 'Gal Gadot, Chris Pine, Robin Wright, Danny Huston, David Thewlis',
                'director' => 'Patty Jenkins',
                'duration_minutes' => 141,
                'year' => 2017,
                'country' => 'Stati Uniti',
                'studio' => 'Warner Bros.'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/6/60/Black_Panther_poster.jpg',
                'original_title' => 'Black Panther',
                'title' => 'Black Panther',
                'description' => 'T’Challa ritorna a Wakanda per prendere il suo posto come re.',
                'genre' => 'Azione, Avventura, Fantasia',
                'actors' => 'Chadwick Boseman, Michael B. Jordan,Lupita Nyong, Danai Gurira, Martin Freeman',
                'director' => 'Ryan Coogler',
                'duration_minutes' => 134,
                'year' => 2018,
                'country' => 'Stati Uniti',
                'studio' => 'Marvel Studios'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/5/56/Deadpool_Poster.jpg',
                'original_title' => 'Deadpool',
                'title' => 'Deadpool',
                'description' => 'Un ex soldato diventa un anti-eroe grazie a un esperimento.',
                'genre' => 'Azione, Commedia, Fantascienza',
                'actors' => 'Ryan Reynolds, Morena Baccarin, T.J. Miller, Ed Skrein, Leslie Uggams',
                'director' => 'Tim Miller',
                'duration_minutes' => 108,
                'year' => 2016,
                'country' => 'Stati Uniti',
                'studio' => '20th Century Fox'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/c/cf/Thor_Ragnarok_poster.jpg',
                'original_title' => 'Thor: Ragnarok',
                'title' => 'Thor: Ragnarok',
                'description' => 'Thor deve fermare la distruzione di Asgard.',
                'genre' => 'Azione, Avventura, Fantasia',
                'actors' => 'Chris Hemsworth, Tom Hiddleston, Cate Blanchett, Tessa Thompson, Jeff Goldblum',
                'director' => 'Taika Waititi',
                'duration_minutes' => 130,
                'year' => 2017,
                'country' => 'Stati Uniti',
                'studio' => 'Marvel Studios'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/a/a9/Aquaman_poster.jpg',
                'original_title' => 'Aquaman',
                'title' => 'Aquaman',
                'description' => 'Il principe del regno sottomarino deve reclamare il suo trono.',
                'genre' => 'Azione, Avventura, Fantascienza',
                'actors' => 'Jason Momoa, Amber Heard, Willem Dafoe, Nicole Kidman, Patrick Wilson',
                'director' => 'James Wan',
                'duration_minutes' => 143,
                'year' => 2018,
                'country' => 'Stati Uniti',
                'studio' => 'Warner Bros.'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/0c/Doctor_Strange_poster.jpg',
                'original_title' => 'Doctor Strange',
                'title' => 'Doctor Strange',
                'description' => 'Un neurochirurgo scopre il mondo delle arti magiche.',
                'genre' => 'Azione, Avventura, Fantascienza',
                'actors' => 'Benedict Cumberbatch, Tilda Swinton, Chiwetel Ejiofor, Mads Mikkelsen, Rachel McAdams',
                'director' => 'Scott Derrickson',
                'duration_minutes' => 115,
                'year' => 2016,
                'country' => 'Stati Uniti',
                'studio' => 'Marvel Studios'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/4/4f/Shazam_%282019_film%29_poster.jpg',
                'original_title' => 'Shazam!',
                'title' => 'Shazam!',
                'description' => 'Un adolescente può trasformarsi in un supereroe pronunciando una parola magica.',
                'genre' => 'Azione, Avventura, Commedia',
                'actors' => 'Asher Angel, Zachary Levi, Mark Strong, Jack Dylan Grazer, Djimon Hounsou',
                'director' => 'David F. Sandberg',
                'duration_minutes' => 132,
                'year' => 2019,
                'country' => 'Stati Uniti',
                'studio' => 'Warner Bros.'
            ],
            [
                'poster' => 'https://upload.wikimedia.org/wikipedia/en/4/40/The_Batman_%282022_film%29_poster.jpg',
                'original_title' => 'The Batman',
                'title' => 'The Batman',
                'description' => 'Batman deve affrontare un misterioso serial killer a Gotham.',
                'genre' => 'Azione, Crimine, Drammatico',
                'actors' => 'Robert Pattinson, Zoë Kravitz, Paul Dano, Jeffrey Wright, Andy Serkis',
                'director' => 'Matt Reeves',
                'duration_minutes' => 155,
                'year' => 2022,
                'country' => 'Stati Uniti',
                'studio' => 'Warner Bros.'
            ],
        ];

        foreach($movies as $movie){
            $newMovie = new Movie(); //chamo o model
            $newMovie-> poster = $movie["poster"];
            $newMovie-> original_title = $movie["original_title"];
            $newMovie-> title = $movie["title"];
            $newMovie-> description = $movie["description"];
            $newMovie-> genre = $movie["genre"];
            $newMovie-> actors = $movie["actors"];
            $newMovie-> director = $movie["director"];
            $newMovie-> duration_minutes = $movie["duration_minutes"];
            $newMovie-> year = $movie["year"];
            $newMovie-> country = $movie["country"];
            $newMovie-> studio = $movie["studio"];
            $newMovie-> save();
        }

    }
}