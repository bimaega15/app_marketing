<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Setting::create([
            'logo_settings' => 'default.png',
            'icon_settings' => 'default.png',
            'nama_settings' => 'App Marketing V.1',
            'alamat_settings' => 'Pontianak, Kalimantan Timur',
            'deskripsi_settings' => 'Pengelolaan data marketing sales',
            'nohp_settings' => '082277506232',
            'email_settings' => 'bimaega15@gmail.com',
            'facebook_settings' => 'https://facebook.com/bimaega15',
            'instagram_settings' => 'https://instagram.com/bimaega15',
            'linkedin_settings' => 'https://linkedin.com/bimaega15',
            'whatsapp_settings' => 'https://wa.me/6282277506232',
            'youtube_settings' => 'https://youtube.com/bimaega15',
            'longitude_settings' => 'https://www.google.com/maps?q=-0.0225,109.3425',
            'latitude_settings' => 'https://www.google.com/maps?q=-0.0225,109.3425',
        ]);
    }
}
