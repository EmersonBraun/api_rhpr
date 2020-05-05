
<?php

use Illuminate\Database\Seeder;
use App\Models\Effective;

class EffectiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Effective::class, $amount)->create();
    }
}