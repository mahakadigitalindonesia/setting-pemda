<?php

namespace Mdigi\SettingPemda\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Mdigi\SettingPemda\Models\Pemda;

class PemdaFactory extends Factory
{
    protected $model = Pemda::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'kode_provinsi' => '01',
            'nama_provinsi' => 'Provinsi',
            'kode_dati2' => '01',
            'nama_dati2' => 'Kabupaten',
            'nama_ibu_kota' => 'Ibu Kota',
            'nama' => 'Badan Pendapatan Daerah',
            'nama_singkat' => 'BPD',
            'alamat' => 'Alamat',
            'no_telp' => '000 00000',
            'fax' => '000 0000',
            'email' => 'bpd@example.com',
            'website' => 'www.bpd.go.id',
            'kode_pos' => '12345',
            'logo' => '-',
            'latitude' => '-',
            'longitude' => '-',
            'created_at' => date('Y-m-d His'),
            'updated_at' => date('Y-m-d His'),
        ];
    }
}