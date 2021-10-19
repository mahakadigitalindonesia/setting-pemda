<?php

namespace Mdigi\SettingPemda\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Mdigi\SettingPemda\Models\Pemda;
use Mdigi\SettingPemda\Tests\TestCase;

class PemdaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    function test_load_pemda()
    {
        Pemda::factory()->create();
        $this->get(route('setting-pemda.index'))->assertSee('BPD');
    }

    /**
     * @test
     */
    function test_update_pemda()
    {
        $pemda = Pemda::factory()->create();
        $this->assertEquals('BPD', $pemda->nama_singkat);

        $this->post(route('setting-pemda.store'), [
            'kode_provinsi' => '02',
            'nama_provinsi' => 'Provinsi',
            'kode_dati2' => '01',
            'nama_dati2' => 'Kabupaten',
            'nama_ibu_kota' => 'Ibu Kota',
            'nama' => 'Badan Pendapatan Daerah',
            'nama_singkat' => 'BPDS',
            'alamat' => 'Alamat',
            'no_telp' => '000 00000',
            'fax' => '000 0000',
            'email' => 'bpd@example.com',
            'website' => 'www.bpd.go.id',
            'kode_pos' => '12345',
            'logo' => '-',
            'latitude' => '-',
            'longitude' => '-',
        ])->assertRedirect(route('setting-pemda.index'));
        $updated = Pemda::first();

        $this->assertEquals('02', $updated->kode_provinsi);
        $this->assertEquals('BPDS', $updated->nama_singkat);
    }

    /**
     * @test
     */
    function test_invalid_update_pemda()
    {
        $this->post(route('setting-pemda.store'), [
            'kode_provinsi' => '02',
            'nama_provinsi' => 'Provinsi',
            'kode_dati2' => '01',
            'nama_dati2' => 'Kabupaten',
            'nama_ibu_kota' => 'Ibu Kota',
            'nama' => 'Badan Pendapatan Daerah',
            'nama_singkat' => 'BPDS',
            'alamat' => 'Alamat',
            'no_telp' => '000 00000',
            'fax' => '000 0000',
            'email' => 'bpd@example.com',
            'website' => 'www.bpd.go.id',
            'kode_pos' => '12345',
            'logo' => '',
            'latitude' => '',
            'longitude' => '',
        ])->assertSessionHasErrors(['logo', 'latitude', 'longitude']);
    }
}