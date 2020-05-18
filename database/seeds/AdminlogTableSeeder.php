
<?php

use Illuminate\Database\Seeder;
use App\Models\Adminlog;

class AdminlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Adminlog::class, $amount)->create();
    }
}