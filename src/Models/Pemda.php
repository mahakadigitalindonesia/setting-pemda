<?php

namespace Mdigi\SettingPemda\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mdigi\SettingPemda\Database\Factories\PemdaFactory;

class Pemda extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_provinsi',
        'nama_provinsi',
        'kode_dati2',
        'nama_dati2',
        'nama_ibu_kota',
        'nama',
        'nama_singkat',
        'alamat',
        'no_telp',
        'fax',
        'email',
        'website',
        'kode_pos',
        'logo',
        'latitude',
        'longitude',
    ];

    public function getTable()
    {
        return config('settingpemda.table_name', parent::getTable());
    }

    protected static function newFactory()
    {
        return PemdaFactory::new();
    }
}
