<?php

namespace Mdigi\SettingPemda\Database\Seeders;

use Illuminate\Database\Seeder;
use Mdigi\SettingPemda\Models\Pemda;

class PemdaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemda::factory()->create();
    }
}
