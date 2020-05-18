
<?php

use Illuminate\Database\Seeder;
use App\Models\Adminuser;

class AdminuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Adminuser::class, $amount)->create();
    }
}