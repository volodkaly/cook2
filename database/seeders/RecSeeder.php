<?php

namespace Database\Seeders;

use App\Models\Reciepts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reciepts::factory()->times(100)->create();
    }
}
