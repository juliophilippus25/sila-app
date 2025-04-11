<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = (string) Str::uuid();

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
