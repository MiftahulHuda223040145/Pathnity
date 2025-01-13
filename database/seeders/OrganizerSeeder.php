<?php

namespace Database\Seeders;

use App\Models\Organizer;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizers = [
            [
                'organization_name' => 'PT. Pertamina',
                'username' => 'pertamina',
                'phone_number' => '081234567890',
                'website' => 'http://pathnity.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Setiabudhi',
                'email' => 'pertamina@pathnity.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'PT. Makmur Jaya',
                'username' => 'makmurjaya',
                'phone_number' => '081234567890',
                'website' => 'http://pathnity.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Setiabudhi',
                'email' => 'makmurjaya@pathnity.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'PT. lokalkarya',
                'username' => 'lokalkatya',
                'phone_number' => '081234567890',
                'website' => 'http://pathnity.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Setiabudhi',
                'email' => 'lokalkatya@pathnity.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'PT. Karya Mandiri',
                'username' => 'karyamandiri',
                'phone_number' => '081234567890',
                'website' => 'http://pathnity.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Setiabudhi',
                'email' => 'karyamandiri@pathnity.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'PT. Karya Jaya',
                'username' => 'karyajaya',
                'phone_number' => '081234567890',
                'website' => 'http://pathnity.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Setiabudhi',
                'email' => 'karyajaya@pathnity.com',
                'password' => bcrypt('password'),
                'role' => '1',
            ],
            [
                'organization_name' => 'PT. Tokopedia',
                'username' => 'tokopedia',
                'phone_number' => '081234567890',
                'website' => 'http://pathnity.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Setiabudhi',
                'email' => 'tokopedia@pathnity.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'PT. Bukalapak',
                'username' => 'bukalapak',
                'phone_number' => '081234567890',
                'website' => 'http://pathnity.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Setiabudhi',
                'email' => 'bukalapak@pathnity.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'PT. Tiktok',
                'username' => 'tiktok',
                'phone_number' => '081234567890',
                'website' => 'http://pathnity.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Setiabudhi',
                'email' => 'tiktok@pathnity.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'Komunitas Hijau Nusantara',
                'username' => 'hijau_nusantara',
                'phone_number' => '081234567890',
                'website' => 'http://hijaunusantara.com',
                'position' => 'manager',
                'tax_id' => '1234567890',
                'address' => 'Jl. Raya Bogor No. 15, Jakarta',
                'email' => 'contact@hijaunusantara.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'Gerakan Pembersihan Sungai',
                'username' => 'pembersihansungai',
                'phone_number' => '089876543210',
                'website' => 'http://pembersihansungai.org',
                'position' => 'manager',
                'tax_id' => '0987654321',
                'address' => 'Jl. Kali No. 7, Bandung',
                'email' => 'info@pembersihansungai.org',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
            [
                'organization_name' => 'Pendidikan Untuk Semua',
                'username' => 'pendidikanuntuksemua',
                'phone_number' => '087654321234',
                'website' => 'http://pendidikanuntuksemua.com',
                'position' => 'manager',
                'tax_id' => '1122334455',
                'address' => 'Jl. Merdeka No. 10, Yogyakarta',
                'email' => 'contact@pendidikanuntuksemua.com',
                'password' => bcrypt('password'),
                'role' => '1',
                'remember_token' => Str::random(10),
            ],
        ];

        foreach ($organizers as $organizer) {
            Organizer::firstOrCreate(
                ['email' => $organizer['email']],
                $organizer
            );
        }
    }
}
