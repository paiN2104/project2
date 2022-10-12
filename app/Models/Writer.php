<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    private static $writers = [
        [
            "id" => 1,
            "name" => "Udin",
            "country" => "Indonesia",
            "contact" => "32143241223",
            "photo" => "logouc2.png"
        ],
        [
            "id" => 2,
            "name" => "Samsudin",
            "country" => "afrika",
            "contact" => "14047",
            "photo" => "logouc2.png"
        ],
        [
            "id" => 3,
            "name" => "Josep",
            "country" => "india",
            "contact" => "09848235823",
            "photo" => "logouc2.png"
        ],
        [
            "id" => 4,
            "name" => "Risky",
            "country" => "Portugal",
            "contact" => "432123124",
            "photo" => "logouc2.png"
        ],
        [
            "id" => 5,
            "name" => "Jevon",
            "country" => "Amerika",
            "contact" => "321432423",
            "photo" => "logouc2.png"
        ]
        ];

        public static function allData(){
            return self::$writers;
        }
        public static function detail($id){
            foreach(self::$writers as $index){
                if($index['id'] == $id)
                return $index;
            }
        }
}
