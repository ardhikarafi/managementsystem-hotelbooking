<?php

use Illuminate\Database\Seeder;

class CountrySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'shortcode' => 'smg', 'title' => 'semarang',],
            ['id' => 2, 'shortcode' => 'ksmg', 'title' => 'kab semarang',],
            ['id' => 3, 'shortcode' => 'Dmk', 'title' => 'Demak',],
            

        ];

        foreach ($items as $item) {
            \App\Country::create($item);
        }
    }
}
