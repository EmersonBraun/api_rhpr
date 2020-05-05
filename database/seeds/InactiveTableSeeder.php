
<?php

use Illuminate\Database\Seeder;
use App\Models\Inactive;

class InactiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Inactive::class, $amount)->create();
    }
}