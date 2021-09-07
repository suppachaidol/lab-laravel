<?php

namespace Database\Seeders;
use App\Models\Room;
use App\Models\Apartment;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = Apartment::get();
        foreach ($apartments as $apartment){
            Room::factory(5)->create([
               'apartment_id' => $apartment->id
            ]);
        }
    }
}
