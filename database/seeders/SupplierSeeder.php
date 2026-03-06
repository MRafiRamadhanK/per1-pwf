<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Supplier::create([
            'name' => 'PT Sumber Rejeki',
            'contact' => '081234567890',
            'address' => 'Jl. Sudirman No 1, Jakarta'
        ]);
        \App\Models\Supplier::create([
            'name' => 'CV Makmur Jaya',
            'contact' => '089876543210',
            'address' => 'Jl. Merdeka No 45, Bandung'
        ]);
    }
}
