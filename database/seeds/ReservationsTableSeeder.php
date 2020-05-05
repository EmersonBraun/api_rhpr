
<?php

use Illuminate\Database\Seeder;
use App\Models\Reservations;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Reservations::class, $amount)->create();
    }
}