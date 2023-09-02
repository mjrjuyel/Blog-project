<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMedia::insert([
            'sm_facebok'=>'www.facebook.com/mjrjuyel',
            'sm_slug'=>'sm-'.uniqId(),
        ]);
    }
}
