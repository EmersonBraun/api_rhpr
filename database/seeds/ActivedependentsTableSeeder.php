
<?php

use Illuminate\Database\Seeder;
use App\Models\Activedependents;

class ActivedependentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(Activedependents::class, $amount)->create();
    }
}