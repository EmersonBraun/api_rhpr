
<?php

use Illuminate\Database\Seeder;
use App\Models\Adminphone;

class AdminphoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Adminphone::class, $amount)->create();
    }
}