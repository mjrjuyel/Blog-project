<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserRole;
use Carbon\Carbon;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::insert([
            'role_title'=>'Super Admin',
            'role_slug'=>'Role-'.uniqId(10),
            'created_at'=>Carbon::now()->toDateTImeString(),
        ]);
    }
}
