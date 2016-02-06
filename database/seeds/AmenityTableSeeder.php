<?php

use App\Amenity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

use App\Book;
class AmenityTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Model::unguard();

        $amenity = new Amenity();
        $amenity->name = "Wifi";
        $amenity->description="Covered Parking";
        $amenity->amenitiable_id = 1;
        $amenity->amenitiable_type="App\\Room";
        $amenity->save();

        $amenity = new Amenity();
        $amenity->name = "Wifi3456";
        $amenity->description="Covered Parking";
        $amenity->amenitiable_id = 2;
        $amenity->amenitiable_type="App\\Accomodation";
        $amenity->save();

        $amenity = new Amenity();
        $amenity->name = "Okay";
        $amenity->description="Ocean Sea View";
        $amenity->amenitiable_id = 2;
        $amenity->amenitiable_type="App\\Room";
        $amenity->save();
    }

}
