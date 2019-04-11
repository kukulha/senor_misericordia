<?php

use Illuminate\Database\Seeder;

class GospelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Gospel::class, 10)->create();
    }
}
