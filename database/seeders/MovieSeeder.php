<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies= config('movies');
        foreach ($movies as $item) {
            $newMovie= new Movie();
            $newMovie->title=$item["title"];
            $newMovie->plot=$item["plot"];
            $newMovie->thumb=$item["thumb"];
            $newMovie->original_lenguage=$item["original_lenguage"];
            $newMovie->vote=$item["vote"];
            $newMovie->director=$item["director"];
            $newMovie->date=$item["date"];

            $newMovie->save();
        }
    }
}
