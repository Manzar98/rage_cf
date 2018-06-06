<?php

use Illuminate\Database\Seeder;

class rfusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\rfusers::class, 5)-> create();
    }
}
