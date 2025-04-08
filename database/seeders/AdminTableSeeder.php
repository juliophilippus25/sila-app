<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = strtoupper(md5("!@#!@#" . Carbon::now()->format('YmdH:i:s')));

        User::insert([
            [
              'id'              => $userId,
              'name'            => 'Riswan',
              'email'           => 'riswan@gmail.com',
              'role'            => 'admin',
              'nip'             => '1234567891011123',
              'password'        => bcrypt('password'),
              'created_at'      => Carbon::now(),
              'updated_at'      => Carbon::now()
            ]
        ]);
    }
}
