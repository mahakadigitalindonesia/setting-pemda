<?php

namespace Mdigi\SettingPemda\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Mdigi\SettingPemda\Models\Pemda;
use Mdigi\SettingPemda\Tests\TestCase;

class PemdaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    function test_pemda_created()
    {
        $pemda = Pemda::factory()->create([
            'nama' => 'Badan Pendapatan Daerah'
        ]);
        $this->assertEquals('Badan Pendapatan Daerah', $pemda->nama);
    }
}