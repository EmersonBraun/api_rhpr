
<?php

use Illuminate\Database\Seeder;
use App\Models\Reserva;

class ReservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Reserva::class, $amount)->create();
    }
}