<?php

namespace Database\Seeders;

use App\Models\FasilitasHotel;
use Illuminate\Database\Seeder;

class FasilitasHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasHotel::create([
            'nama_fasilitas_hotel' => 'Kolam Renang',
            'foto_fasilitas_hotel' => null,
            'deskripsi_fasilitas_hotel' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis commodo leo. Integer a condimentum ex. Donec fringilla convallis porttitor. Vivamus at imperdiet diam, non fringilla felis. Sed aliquet suscipit elit, vel volutpat magna interdum in. Nullam sed nisl consectetur, consequat mi ac, lacinia felis. Nulla vel venenatis ligula',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel' => 'Restoran',
            'foto_fasilitas_hotel' => null,
            'deskripsi_fasilitas_hotel' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis commodo leo. Integer a condimentum ex. Donec fringilla convallis porttitor. Vivamus at imperdiet diam, non fringilla felis. Sed aliquet suscipit elit, vel volutpat magna interdum in. Nullam sed nisl consectetur, consequat mi ac, lacinia felis. Nulla vel venenatis ligula',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel' => 'Parkir Luas',
            'foto_fasilitas_hotel' => null,
            'deskripsi_fasilitas_hotel' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis commodo leo. Integer a condimentum ex. Donec fringilla convallis porttitor. Vivamus at imperdiet diam, non fringilla felis. Sed aliquet suscipit elit, vel volutpat magna interdum in. Nullam sed nisl consectetur, consequat mi ac, lacinia felis. Nulla vel venenatis ligula',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel' => 'Sarapan Pagi Gratis',
            'foto_fasilitas_hotel' => null,
            'deskripsi_fasilitas_hotel' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis commodo leo. Integer a condimentum ex. Donec fringilla convallis porttitor. Vivamus at imperdiet diam, non fringilla felis. Sed aliquet suscipit elit, vel volutpat magna interdum in. Nullam sed nisl consectetur, consequat mi ac, lacinia felis. Nulla vel venenatis ligula',
        ]);
    }
}
