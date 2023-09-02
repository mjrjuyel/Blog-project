<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Basic;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Basic::insert([
            'basic_logo_title'=>'Hyper',
            'basic_copyright'=>'Lorem ipsum dolor sit amet,consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur  atque sequi delectus dolore veritatis obcaecati  quae, repellat eveniet omnis, voluptatem in. Soluta,  eligendi, architecto.'
        ]);
    }
}
