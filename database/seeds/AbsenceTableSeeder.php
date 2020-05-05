
<?php

use Illuminate\Database\Seeder;
use App\Models\Absence;

class AbsenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Absence::class, $amount)->create();
    }
}