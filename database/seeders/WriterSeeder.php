<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Writer;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID=Factory::create('id_ID');
        $fakerFR=Factory::create('fr_FR');
        $fakerIT=Factory::create('it_IT');
        $fakerRU=Factory::create('ru_RU');
        $fakerUS=Factory::create('en_US');

        Writer::factory()->create([
            "contact"=>$fakerID->phoneNumber,
            "photo"=>'logouc2.png'
        ]);

        Writer::factory()->create([
            "contact"=>$fakerFR->phoneNumber,
            "photo"=>'logouc2.png'
        ]);

        Writer::factory()->create([
            "contact"=>$fakerIT->phoneNumber,
            "photo"=>'logouc2.png'
        ]);

        Writer::factory()->create([
            "contact"=>$fakerRU->phoneNumber,
            "photo"=>'logouc2.png'
        ]);

        Writer::factory()->create([
            "contact"=>$fakerUS->phoneNumber,
            "photo"=>'logouc2.png'
        ]);
    }
}
