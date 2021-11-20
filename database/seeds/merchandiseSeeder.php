<?php

use Illuminate\Database\Seeder;

class merchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Merchandises::class, 10)->create();
    }
}
