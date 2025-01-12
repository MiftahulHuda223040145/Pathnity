<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{

    public function run(): void
    {
        $types = [
            ['name' => 'FullTime'],
            ['name' => 'HalfTime'],
            ['name' => 'Online']
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
