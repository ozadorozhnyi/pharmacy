<?php

namespace Database\Seeders;

use App\Models\ActiveSubstance;
use App\Models\Manufacturer;
use App\Models\Medicine;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $active_substances = ActiveSubstance::factory(50)->create();
        $manufacturers = Manufacturer::factory(12)->create();

        Medicine::factory(50)->make()->each(
            function ($medicine) use ($active_substances, $manufacturers) {
                $medicine->activeSubstance()->associate($active_substances->random());
                $medicine->manufacturer()->associate($manufacturers->random());
                $medicine->save();
            }
        );
    }
}
