
<?php

use Illuminate\Database\Seeder;
use App\Models\Opmimpmeta4;

class Opmimpmeta4TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Opmimpmeta4::class, $amount)->create();
    }
}