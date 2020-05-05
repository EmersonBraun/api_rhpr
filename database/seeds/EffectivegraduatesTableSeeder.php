
<?php

use Illuminate\Database\Seeder;
use App\Models\Effectivegraduates;

class EffectivegraduatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Effectivegraduates::class, $amount)->create();
    }
}