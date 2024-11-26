<?php

namespace Database\Seeders;

use App\Models\DigitalIdentity;
use Illuminate\Database\Seeder;

class DigitalIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DigitalIdentity::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'national_id' => '123456789',
            'dob' => '1980-01-01',
            'address' => '123 Main Street, Jakarta'
        ]);

        DigitalIdentity::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'national_id' => '987654321',
            'dob' => '1990-02-02',
            'address' => '456 Second Avenue, Bandung'
        ]);
    }
}