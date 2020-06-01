
<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\User;
use App\Models\Admin\System;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test',
            'rg' => '101010',
            'cpf' => '101010',
            'workplace' => 'test',
            'password' => bcrypt('secret'),
            'blocked' => false,
            'reset' => false,
            'system_id' => System::all()->random()->id
        ]);
    }
}