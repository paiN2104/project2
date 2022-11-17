<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Book;
use App\Models\Writer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID = Factory::create('id_ID');
        $fakerFR = Factory::create('fr_FR');
        $fakerIT = Factory::create('it_IT');
        $fakerRU = Factory::create('ru_RU');
        $fakerUS = Factory::create('en_US');

        $index = 0;

        foreach (Writer::all() as $writer) {
            if ($index == 0) {
                Book::factory()->create([
                    "title" => $fakerID->text,
                    "synopsis" => "Synopsis buku 1",
                    "writer_id" => $writer,
                ]);
            } elseif ($index == 1) {
                Book::factory()->create([
                    "title" => $fakerFR->text,
                    "synopsis" => "Synopsis buku 2",
                    "writer_id" => $writer,
                ]);
            } elseif ($index == 2) {
                Book::factory()->create([
                    "title" => $fakerIT->text,
                    "synopsis" => "Synopsis buku 3",
                    "writer_id" => $writer,
                ]);
            } elseif ($index == 3) {
                Book::factory()->create([
                    "title" => $fakerRU->text,
                    "synopsis" => "Synopsis buku 4",
                    "writer_id" => $writer,
                ]);
            } elseif ($index == 4) {
                Book::factory()->create([
                    "title" => $fakerUS->text,
                    "synopsis" => "Synopsis buku 5",
                    "writer_id" => $writer,
                ]);
            }
            $index++;
        }
    }
}
