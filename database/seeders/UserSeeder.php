<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name'=>'Juyel',
            'email'=>'juyel@gmail.com',
            'phone'=>'01754183206',
            'address'=>'Dhaka',
            'rol_id'=>'1',
            'slug'=>'User-'.uniqId(10),
            'password'=>Hash::make('11111111'),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
    }
}
