<?php

use Illuminate\Database\Seeder;
use App\Drink;

class DrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Drink::class,15)->create();
    }
}
