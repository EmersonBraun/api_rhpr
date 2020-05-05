
<?php

use Illuminate\Database\Seeder;
use App\Models\Opmmeta4;

class Opmmeta4TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Opmmeta4::class, $amount)->create();
    }
}