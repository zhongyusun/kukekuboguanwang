<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::firstOrNew(['username'=>'xxcm9966453'])->fill(['password'=>bcrypt('password')])->save();
    }
}
