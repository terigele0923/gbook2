<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminUser;
class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        AdminUser::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'state' => AdminUser::NORMAL,]);    
    }
}
