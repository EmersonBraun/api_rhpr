
<?php

use Illuminate\Database\Seeder;
use App\Models\Cops;

class CopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Cops::class, $amount)->create();
    }
}