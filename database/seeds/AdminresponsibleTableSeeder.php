
<?php

use Illuminate\Database\Seeder;
use App\Models\Adminresponsible;

class AdminresponsibleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Adminresponsible::class, $amount)->create();
    }
}