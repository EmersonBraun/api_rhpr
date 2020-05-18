
<?php

use Illuminate\Database\Seeder;
use App\Models\Adminemail;

class AdminemailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Adminemail::class, $amount)->create();
    }
}