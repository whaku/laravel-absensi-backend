<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

        User::factory()->create([
            'name' => 'Irwansyah',
            'email' => 'irwan@gmail.com',
            'password' => Hash::make('00000000'),
        ]);

        \App\Models\Company::create([
            'name'=> 'Pempek Ellen',
            'email'=> 'ellen@gmail.com',
            'address'=> 'KaryaJaya Kertapati',
            'latitude'=>'-3.052184305626329',
            'longitude'=> '104.7424794159819',
            'radius_km'=> '0.5',
            'time_in'=> '08:00',
            'time_out'=> '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
