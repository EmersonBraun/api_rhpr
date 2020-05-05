
<?php

use Illuminate\Database\Seeder;
use App\Models\Efetivopmpr;

class EfetivopmprTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Efetivopmpr::class, $amount)->create();
    }
}