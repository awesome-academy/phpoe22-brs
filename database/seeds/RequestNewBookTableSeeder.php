<?php

use Illuminate\Database\Seeder;

class RequestNewBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\RequestNewbook::class, 10)->create();
    }
}
